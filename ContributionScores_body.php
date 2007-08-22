<?php
class ContributionScores extends SpecialPage
{
        function ContributionScores() {
                SpecialPage::SpecialPage("ContributionScores");
                self::loadMessages();
        }
 
        function genContributionScoreTable( $sql, $dbr, $days, $limit ) {
                global $contribScoreIgnoreBots;
 
                $dbr =& wfGetDB( DB_SLAVE );
 
                $userTable = $dbr->tableName('user');
                $userGroupTable = $dbr->tableName('user_groups');
                $revTable = $dbr->tableName('revision');
 
                $sql =  "SELECT user_id, " .
                        "user_name, " .
                        "COUNT(DISTINCT rev_page) AS page_count, " .
                        "COUNT(rev_id) AS rev_count, " .
                        "(COUNT(DISTINCT rev_page)+SQRT(COUNT(rev_id)-COUNT(DISTINCT rev_page))*2) AS wikiRank " .
                        "FROM $userTable userTable JOIN $revTable revTable ON (userTable.user_id=revTable.rev_user) ";
 
                if ( $days > 0 ) {
                  $date = mktime() - (60*60*24*$days);
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
                        "ORDER BY wikiRank DESC " .
                        "LIMIT $limit";
 
                $res = $dbr->query($sql);
 
                $output = "{|class=\"wikitable sortable\"\n".
                          "|-\n".
                          "|style=\"font-weight: bold;\"|Score\n".
                          "|style=\"font-weight: bold;\"|Pages\n".
                          "|style=\"font-weight: bold;\"|Changes\n".
                          "|style=\"font-weight: bold;\"|Username\n";
 
                while ( $row = $dbr->fetchObject( $res ) ) {
                  $wikiUserName = $row->user_name;
                  $output .= "|-\n|" .
                    round($row->wikiRank,0) . "\n|" .
                    $row->page_count . "\n|" .
                    $row->rev_count . "\n|" .
                    "[[User:".$wikiUserName."|".$wikiUserName."]] ([[User_talk:".$wikiUserName."|Talk]] | [[Special:Contributions/".$wikiUserName."|contribs]])" . "\n";
                }
                $output .= "|}";
                $dbr->freeResult( $res );
 
                return $output;
        }
 
        function execute( $par ) {
                global $wgRequest, $wgOut, $contribScoreReports;
 
                $this->setHeaders();
 
                # Get request data from, e.g.
                $param = $wgRequest->getText('param');
 
                if (!is_array($contribScoreReports)) {
                    $contribScoreReports = array(
                        array(7,50),
                        array(30,50),
                        array(0,50));
                }
 
                $wgOut->addWikiText ("Scores are calculated as follows:\n".
                    "*1 point for each unique page edited\n".
                    "*Square Root of (Total Edits Made) - (Total Unique Pages) * 2\n".
                    "Scores calculated in this manner weight edit diversity over edit volume.  Basically, this score measures".
                    " primarily unique pages edited, with consideration for high edit volume - assumed to be a higher quality ".
                    "article.");
 
                foreach ( $contribScoreReports as $scoreReport) {
                    if ( $scoreReport[0] > 0 ) {
                        $reportTitle = "Last $scoreReport[0] Days";
                    } else {
                        $reportTitle = "All Revisions";
                    }
                    $reportTitle .= " (Top $scoreReport[1])";
                    $wgOut->addWikiText ("== $reportTitle ==\n".$this->genContributionScoreTable($sql,$dbr,$scoreReport[0],$scoreReport[1]));
                }
        }
 
 
        function loadMessages() {
                static $messagesLoaded = false;
                global $wgMessageCache;
                if ( $messagesLoaded ) return true;
                $messagesLoaded = true;
 
                require( dirname( __FILE__ ) . '/ContributionScores.i18n.php' );
                foreach ( $allMessages as $lang => $langMessages ) {
                        $wgMessageCache->addMessages( $langMessages, $lang );
                }
 
                                return true;
        }
}
