<?php
/** \file
 * \brief Contains setup code for the Contribution Scores Extension.
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if ( !defined( 'MEDIAWIKI' ) ) {
	echo 'Contribution Scores extension';
	exit( 1 );
}

$wgExtensionCredits['specialpage'][] = [
	'path' => __FILE__,
	'name' => 'Contribution Scores',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Contribution_Scores',
	'author' => 'Tim Laqua',
	'descriptionmsg' => 'contributionscores-desc',
	'version' => '1.25.0'
];

define( 'CONTRIBUTIONSCORES_MAXINCLUDELIMIT', 50 );
$wgContribScoreReports = null;

// These settings can be overridden in LocalSettings.php.

// Set to true to exclude bots from the reporting.
$wgContribScoreIgnoreBlockedUsers = false;

// Set to true to exclude blocked users from the reporting.
$wgContribScoreIgnoreBots = false;

// Set to true to use real user names when available. Only for MediaWiki 1.19 and later.
$wgContribScoresUseRealName = false;

// Set to true to disable cache for parser function and inclusion of table.
$wgContribScoreDisableCache = false;

$wgAutoloadClasses['ContributionScores'] = __DIR__ . '/ContributionScores_body.php';
$wgSpecialPages['ContributionScores'] = 'ContributionScores';

$wgMessagesDirs['ContributionScores'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['ContributionScoresAlias'] = __DIR__ . '/ContributionScores.alias.php';
$wgExtensionMessagesFiles['ContributionScoresMagic'] =
	__DIR__ . '/ContributionScores.i18n.magic.php';

$wgHooks['ParserFirstCallInit'][] = 'efContributionScores_Setup';

function efContributionScores_Setup( &$parser ) {
	$parser->setFunctionHook( 'cscore', 'efContributionScores_Render' );

	return true;
}

function efContributionScores_Render( &$parser, $usertext, $metric = 'score' ) {
	global $wgContribScoreDisableCache;

	if ( $wgContribScoreDisableCache ) {
		$parser->getOutput()->updateCacheExpiry( 0 );
	}

	$user = User::newFromName( $usertext );
	$dbr = wfGetDB( DB_REPLICA );

	if ( $user instanceof User && $user->isLoggedIn() ) {
		global $wgLang;

		$revWhere = ActorMigration::newMigration()->getWhere( $dbr, 'rev_user', $user );
		if ( $metric == 'score' ) {
			$res = $dbr->select(
				[ 'revision' ] + $revWhere['tables'],
				'COUNT(DISTINCT rev_page)+SQRT(COUNT(rev_id)-COUNT(DISTINCT rev_page))*2 AS wiki_rank',
				$revWhere['conds'],
				__METHOD__,
				[],
				$revWhere['joins']
			);
			$row = $dbr->fetchObject( $res );
			$output = $wgLang->formatNum( round( $row->wiki_rank, 0 ) );
		} elseif ( $metric == 'changes' ) {
			$res = $dbr->select(
				[ 'revision' ] + $revWhere['tables'],
				'COUNT(rev_id) AS rev_count',
				$revWhere['conds'],
				__METHOD__,
				[],
				$revWhere['joins']
			);
			$row = $dbr->fetchObject( $res );
			$output = $wgLang->formatNum( $row->rev_count );
		} elseif ( $metric == 'pages' ) {
			$res = $dbr->select(
				[ 'revision' ] + $revWhere['tables'],
				'COUNT(DISTINCT rev_page) AS page_count',
				$revWhere['conds'],
				__METHOD__,
				[],
				$revWhere['joins']
			);
			$row = $dbr->fetchObject( $res );
			$output = $wgLang->formatNum( $row->page_count );
		} else {
			$output = wfMessage( 'contributionscores-invalidmetric' )->text();
		}
	} else {
		$output = wfMessage( 'contributionscores-invalidusername' )->text();
	}

	return $parser->insertStripItem( $output, $parser->mStripState );
}
