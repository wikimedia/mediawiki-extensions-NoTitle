<?php
/*
 * NoTitle extension to MediaWiki
 *
 * Adds a magic word that hides the main title heading in a page
 *
 * @link https://www.mediawiki.org/wiki/Extension:NoTitle Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:NoTitle Support
 * @link https://phabricator.wikimedia.org/diffusion/ENOT/ Source code
 *
 * @file NoTitle.php
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @author Carlo Cabanilla
 * @author Tony Boyles
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License 3.0 or later
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is an extension to MediaWiki and cannot be used standalone.' );
}

// Display extension properties on MediaWiki.
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'NoTitle',
	'version' => '0.3.0',
	'author' => array(
		'Carlo Cabanilla',
		'Tony Boyles',
		'...'
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:NoTitle',
	'descriptionmsg' => 'notitle-desc',
	'license-name' => 'GPL-3.0+'
);

// Load extension classes.
$wgAutoloadClasses['NoTitle'] = __DIR__ . '/NoTitle.body.php';

// Register extension messages and other localisation.
$wgMessagesDirs['NoTitle'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['NoTitleMagic'] = __DIR__ . '/NoTitle.i18n.magic.php';

// Register extension hooks.
$wgHooks['ParserBeforeTidy'][] = 'NoTitle::killTitle';
