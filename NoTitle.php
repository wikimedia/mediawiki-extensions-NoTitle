<?php
/*
 *  NoTitle
 *  Adds a magic word that hides the main title heading in a page
 *
 * @file NoTitle.php
 * @author Carlo Cabanilla
 * @author Tony Boyles
 */

if (!defined('MEDIAWIKI')) {
	die('This file is an extension to the <a href=\'http://www.mediawiki.org/\'>MediaWiki Platform</a> and cannot be used standalone.');
}

# File inclusion and registration:
$wgAutoloadClasses['NoTitle'] = __DIR__."/NoTitle.body.php";
$wgMessagesDirs['NoTitle'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles[ 'NoTitle' ] = __DIR__.'/NoTitle.i18n.php';
$wgExtensionMessagesFiles[ 'NoTitleMagic' ] = __DIR__.'/NoTitle.i18n.magic.php';

# Hook our events:
$wgHooks['ParserBeforeTidy'][] = 'NoTitle::killTitle';

# Extension Registration:
$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'NoTitle',
	'version'        => '0.2.0',
	'author'         => array( 'Carlo Cabanilla','[http://milcord.com/ Tony Boyles, Milcord LLC]' ),
	'url'            => 'https://www.mediawiki.org/wiki/Extension:NoTitle',
	'descriptionmsg' => 'notitle-desc',
);

