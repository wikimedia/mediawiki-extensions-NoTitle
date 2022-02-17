<?php
/*
 *  NoTitle
 *  Adds a magic word that hides the main title heading in a page
 *
 * @file
 * @author Tony Boyles
 */

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
		if ( method_exists( $pOut, 'getPageProperty' ) ) {
			// MW 1.38+
			if ( $pOut->getPageProperty( 'notitle' ) !== null ) {
				$out->addModuleStyles( 'ext.NoTitle' );
			}
		} else {
			if ( $pOut->getProperty( 'notitle' ) !== false ) {
				$out->addModuleStyles( 'ext.NoTitle' );
			}
		}
	}
}
