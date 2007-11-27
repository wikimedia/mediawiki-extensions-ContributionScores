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
	'author'=>'Tim Laqua, Siebrand Mazeland',
	'description'=>'Polls wiki database for highest user contribution volume',
	'version'=>'1.5'
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['ContributionScores'] = $dir . 'ContributionScores.i18n.php';
$wgAutoloadClasses['ContributionScores'] = $dir . 'ContributionScores_body.php';

$wgSpecialPages['ContributionScores'] = 'ContributionScores';
