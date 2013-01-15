<?php
/*
 *  NoTitle
 *  <insert a short description here>
 *
 * @file NoTitle.php
 * @author Tony Boyles
 */
 
if (!defined('MEDIAWIKI')) {
	die('This file is an extension to the <a href=\'http://www.mediawiki.org/\'>MediaWiki Platform</a> and cannot be used standalone.');
}

# File inclusion and registration:
require('NoTitle.body.php');
$wgExtensionMessagesFiles[ 'NoTitle' ] = __DIR__.'/NoTitle.i18n.php';

# Hook our events:
$wgHooks['LanguageGetMagic'][] = 'NoTitle::addMagicWordLanguage';
$wgHooks['ParserBeforeTidy'][] = 'NoTitle::checkForMagicWord';

# Extension Registration:
$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'NoTitle',
	'version'        => '0.1.0',
	'author'         => array( '[http://milcord.com/ Tony Boyles]' ),
	'url'            => 'http://milcord.com/',
	'descriptionmsg' => 'notitle-desc',
);

