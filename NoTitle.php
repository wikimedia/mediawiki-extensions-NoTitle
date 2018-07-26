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

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'NoTitle' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['NoTitle'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the NoTitle extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the NoTitle extension requires MediaWiki 1.29+' );
}
