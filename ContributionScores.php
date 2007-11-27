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
	'description'=>'Polls wiki database for highest user contribution volume',
	'version'=>'1.5'
);

$wgAutoloadClasses['ContributionScores'] = $dir . 'ContributionScores_body.php';
$wgSpecialPages['ContributionScores'] = 'ContributionScores';

if( version_compare( $wgVersion, '1.12alpha', '>=' ) ) {    
	$dir = dirname(__FILE__) . '/';
	$wgExtensionMessagesFiles['ContributionScores'] = $dir . 'ContributionScores.i18n.php';
} else {
	$wgExtensionFunctions[] = 'efContributionScores';
}

///Message Cache population for versions that did not support $wgExtensionFunctions
function efContributionScores() {
	global $wgMessageCache;   
	
	#Add Messages   
	require( dirname( __FILE__ ) . '/ContributionScores.i18n.php' );   
	foreach( $messages as $key => $value ) {   
		  $wgMessageCache->addMessages( $messages[$key], $key );   
	}   
} 
