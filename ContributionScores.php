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
    'name'=>'Contribution Scores',
    'url'=>'http://www.mediawiki.org/wiki/Extension:Contribution_Scores',
    'author'=>'Tim Laqua',
    'description'=>'Polls Wiki Database for highest user contribution volume.',
    'version'=>'1.4'
);
 
$wgAutoloadClasses['ContributionScores'] = dirname(__FILE__) . '/ContributionScores_body.php';
$wgSpecialPages['ContributionScores'] = 'ContributionScores';
 
if ( version_compare( $wgVersion, '1.10.0', '<' ) ) {
    //Extension designed for 1.10.0+, but will work on some older versions
    //LoadAllMessages hook throws errors before 1.10.0
} else {
    $wgHooks['LoadAllMessages'][] = 'ContributionScores::loadMessages';
}
