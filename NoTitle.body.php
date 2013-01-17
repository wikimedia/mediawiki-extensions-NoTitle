<?php
/*
 *  NoTitle
 *  Adds a magic word that hides the main title heading in a page
 *
 * @file NoTitle.body.php
 * @author Tony Boyles
 */

if (!defined('MEDIAWIKI')) {
	die('This file is an extension to the <a href=\'http://www.mediawiki.org/\'>MediaWiki Platform</a> and cannot be used standalone.');
}

class NoTitle {
	public static function killTitle(&$parser, &$text) {
		global $wgOut;
		$mw = MagicWord::get('MAG_NOTITLE');
		if ($mw -> matchAndRemove($text)) {
			$wgOut -> addInlineStyle('.firstHeading, .subtitle, #siteSub, #contentSub, .pagetitle { display:none; }');
		}
		return True;
	}
}
