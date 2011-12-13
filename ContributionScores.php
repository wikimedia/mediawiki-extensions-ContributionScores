<?php
/** \file
* \brief Contains setup code for the Contribution Scores Extension.
*/

# Not a valid entry point, skip unless MEDIAWIKI is defined
if (!defined('MEDIAWIKI')) {
	echo "Contribution Scores extension";
	exit(1);
}

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Contribution Scores',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Contribution_Scores',
	'author' => 'Tim Laqua',
	'descriptionmsg' => 'contributionscores-desc',
	'version' => '1.12'
);

define( 'CONTRIBUTIONSCORES_PATH', dirname( __FILE__ ) );
define( 'CONTRIBUTIONSCORES_EXTPATH', str_replace( $_SERVER['DOCUMENT_ROOT'], '/', CONTRIBUTIONSCORES_PATH ) );
define( 'CONTRIBUTIONSCORES_MAXINCLUDELIMIT', 50 );
$wgContribScoreReports = null;
$wgContribScoreIgnoreBlockedUsers = false;
$wgContribScoreIgnoreBots = false;
$wgContribScoreDisableCache = false;

$wgAutoloadClasses['ContributionScores'] = CONTRIBUTIONSCORES_PATH . '/ContributionScores_body.php';
$wgSpecialPages['ContributionScores'] = 'ContributionScores';
$wgSpecialPageGroups['ContributionScores'] = 'wiki';

$wgExtensionMessagesFiles['ContributionScores'] = CONTRIBUTIONSCORES_PATH . '/ContributionScores.i18n.php';
$wgExtensionAliasesFiles['ContributionScores'] = CONTRIBUTIONSCORES_PATH . '/ContributionScores.alias.php';
$wgExtensionMessagesFiles['ContributionScores'] = CONTRIBUTIONSCORES_PATH . '/ContributionScores.i18n.php';

$wgHooks['LanguageGetMagic'][] = 'efContributionScores_LanguageGetMagic';

$wgHooks['ParserFirstCallInit'][] = 'efContributionScores_Setup';

function efContributionScores_Setup( &$parser ) {
	$parser->setFunctionHook( 'cscore', 'efContributionScores_Render' );
	return true;
}

function efContributionScores_LanguageGetMagic( &$magicWords, $langCode ) {
	$magicWords['cscore'] = array( 0, 'cscore' );
	return true;
}

function efContributionScores_Render(&$parser, $usertext, $metric='score') {
	global $wgContribScoreDisableCache;

	if ($wgContribScoreDisableCache) {
		$parser->disableCache();
	}

	$user = User::newFromName($usertext);
	$dbr = wfGetDB( DB_SLAVE );

	if ( $user instanceof User && $user->isLoggedIn() ) {
		if ($metric=='score') {
			$res = $dbr->select('revision',
									'COUNT(DISTINCT rev_page)+SQRT(COUNT(rev_id)-COUNT(DISTINCT rev_page))*2 AS wiki_rank',
									array('rev_user' => $user->getID()));
			$row = $dbr->fetchObject($res);
			$output = round($row->wiki_rank,0);
		} elseif ($metric=='changes') {
			$res = $dbr->select('revision',
									'COUNT(rev_id) AS rev_count',
									array('rev_user' => $user->getID()));
			$row = $dbr->fetchObject($res);
			$output = $row->rev_count;

		} elseif ($metric=='pages') {
			$res = $dbr->select('revision',
									'COUNT(DISTINCT rev_page) AS page_count',
									array('rev_user' => $user->getID()));
			$row = $dbr->fetchObject($res);
			$output = $row->page_count;
		} else {
			$output = wfMsg('contributionscores-invalidmetric');
		}
	} else {
		$output = wfMsg('contributionscores-invalidusername');
	}

	return $parser->insertStripItem($output, $parser->mStripState);
}
