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

class NoTitle{
  static function addMagicWordLanguage(&$magicWords, $langCode) {
    switch($langCode) {
    default:
      $magicWords['notitle'] = array(0, '__NOTITLE__');
    }
    MagicWord::$mDoubleUnderscoreIDs[] = 'notitle';
    return true;
  }
 
  static function checkForMagicWord(&$parser, &$text) {
    if ( isset( $parser->mDoubleUnderscores['notitle'] ) ) {
      $parser->mOutput->addHeadItem('<style type="text/css">/*<![CDATA[*/ .firstHeading, .subtitle, #siteSub, #contentSub, .pagetitle { display:none; } /*]]>*/</style>');
    }
    return true;
  }
}

