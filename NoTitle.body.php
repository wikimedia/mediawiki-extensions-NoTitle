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
	 * @param array &$doubleUnderscoreIDs
	 */
	public static function onGetDoubleUnderscoreIDs( &$doubleUnderscoreIDs ) {
		$doubleUnderscoreIDs[] = 'notitle';
	}

	/**
	 * @param OutputPage $out
	 * @param ParserOutput $pOut
	 */
	public static function onOutputPageParserOutput( OutputPage $out, ParserOutput $pOut ) {
		if ( $pOut->getProperty( 'notitle' ) !== false ) {
			$out->addModuleStyles( 'ext.NoTitle' );
		}
	}
}
