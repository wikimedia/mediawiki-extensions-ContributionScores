<?php
/** \file
* \brief Contains code for the ContributionScores Class (extends SpecialPage).
*/

///Special page class for the Contribution Scores extension
/**
 * Special page that generates a list of wiki contributors based
 * on edit diversity (unique pages edited) and edit volume (total
 * number of edits.
 *
 * @addtogroup Extensions
 * @author Tim Laqua <t.laqua@gmail.com>
 * @author Siebrand Mazeland
 */
class ContributionScores extends SpecialPage
{
	public function __construct() {
		SpecialPage::SpecialPage( 'ContributionScores' );
	}

	function getDescription() {
		return wfMsg( 'contributionscores' );
	}

	///Generates a "Contribution Scores" table for a given LIMIT and date range
	/**
	 * Function generates Contribution Scores tables in HTML format (not wikiText)
	 *
	 * @param $days int Days in the past to run report for
	 * @param $limit int Maximum number of users to return (default 50)
	 *
	 * @return HTML Table representing the requested Contribution Scores.
	 */
	function genContributionScoreTable( $days, $limit ) {
		global $contribScoreIgnoreBots, $wgUser;

		$dbr =& wfGetDB( DB_SLAVE );

		$userTable = $dbr->tableName('user');
		$userGroupTable = $dbr->tableName('user_groups');
		$revTable = $dbr->tableName('revision');

		$sql =  "SELECT user_id, " .
			"user_name, " .
			"COUNT(DISTINCT rev_page) AS page_count, " .
			"COUNT(rev_id) AS rev_count, " .
			"COUNT(DISTINCT rev_page)+SQRT(COUNT(rev_id)-COUNT(DISTINCT rev_page))*2 AS wiki_rank " .
			"FROM $userTable userTable JOIN $revTable revTable ON (userTable.user_id=revTable.rev_user) ";

		if ( $days > 0 ) {
			$date = time() - (60*60*24*$days);
			$dateString = $dbr->timestamp($date);
			$sql .= "WHERE rev_timestamp > '$dateString' ";
		}

		if ( $contribScoreIgnoreBots ) {
			if (preg_match("/where/i", $sql)) {
				$sql .= "AND ";
			} else {
				$sql .= "WHERE ";
			}
			$sql .= "user_id NOT IN (SELECT ug_user FROM $userGroupTable WHERE ug_group='bot') ";
		}

		$sql .= "GROUP BY user_id, user_name " .
			"ORDER BY wiki_rank DESC " .
			"LIMIT $limit";

		$res = $dbr->query($sql);

		$output = "<table class=\"wikitable sortable plainlinks\">\n".
			"<tr>\n".
			"<td style=\"font-weight: bold;\">" . wfMsg( 'contributionscores-score' ) . "</td>\n" .
			"<td style=\"font-weight: bold;\">" . wfMsg( 'contributionscores-pages' ) . "</td>\n" .
			"<td style=\"font-weight: bold;\">" . wfMsg( 'contributionscores-changes' ) . "</td>\n" .
			"<td style=\"font-weight: bold;\">" . wfMsg( 'contributionscores-username' ) . "</td>\n";

		$skin =& $wgUser->getSkin();
		while ( $row = $dbr->fetchObject( $res ) ) {
			$output .= "</tr><tr>\n<td>" .
				round($row->wiki_rank,0) . "\n</td><td>" .
				$row->page_count . "\n</td><td>" .
				$row->rev_count . "\n</td><td>" .
				$skin->userLink( $row->user_id, $row->user_name ) .
				$skin->userToolLinks( $row->user_id, $row->user_name ) . "</td>\n";
		}
		$output .= "</tr></table>";
		$dbr->freeResult( $res );

		return $output;
	}

	function execute( $par ) {
		global $wgRequest, $wgOut, $contribScoreReports, $wgVersion;
		
		if( version_compare( $wgVersion, '1.11', '>=' ) )
			wfLoadExtensionMessages( 'ContributionScores' );
		
		$this->setHeaders();

		# Get request data from, e.g.
		$param = $wgRequest->getText('param');

		if (!is_array($contribScoreReports)) {
			$contribScoreReports = array(
				array(7,50),
				array(30,50),
				array(0,50));
		}

		$wgOut->addWikiText (wfMsg('contributionscores-info'));

		foreach ( $contribScoreReports as $scoreReport) {
			if ( $scoreReport[0] > 0 ) {
				$reportTitle = wfMsg('contributionscores-days', $scoreReport[0]);
			} else {
				$reportTitle = wfMsg('contributionscores-allrevisions');
			}
			$reportTitle .= " " . wfMsg('contributionscores-top', $scoreReport[1]);
			$wgOut->addWikiText ("== $reportTitle ==\n");
			$wgOut->addHtml( $this->genContributionScoreTable($scoreReport[0],$scoreReport[1]));
		}
	}
}
