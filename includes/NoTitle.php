<?php

use MediaWiki\Output\OutputPage;
use MediaWiki\Parser\ParserOutput;

/**
 *  NoTitle
 *  Adds a magic word that hides the main title heading in a page
 *
 * @author Tony Boyles
 */
class NoTitle {

	/**
	 * @param array &$doubleUnderscoreIDs
	 */
	public static function onGetDoubleUnderscoreIDs( &$doubleUnderscoreIDs ) {
		$doubleUnderscoreIDs[] = 'notitle';
	}

	public static function onOutputPageParserOutput( OutputPage $out, ParserOutput $pOut ) {
		if ( $pOut->getPageProperty( 'notitle' ) !== null ) {
			$out->addModuleStyles( 'ext.NoTitle' );
		}
	}
}
