<?php
/*
 *  NoTitle
 *  Adds a magic word that hides the main title heading in a page
 *
 * @file NoTitle.body.php
 * @author Tony Boyles
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is an extension to the <a href="http://www.mediawiki.org/">MediaWiki platform</a> and cannot be used standalone.' );
}

class NoTitle {

	/**
	 * @param Parser $parser
	 * @param string &$text
	 */
	public static function onParserBeforeTidy( Parser $parser, &$text ) {
		$mw = MagicWord::get( 'MAG_NOTITLE' );
		if ( $mw->matchAndRemove( $text ) ) {
			$parser->getOutput()->addModuleStyles( 'ext.NoTitle' );
		}
	}
}
