<?php
/*
 * Wrap plugin, configuration metadata
 *
 */

$meta['noPrefix'] = array('string');
$meta['restrictedClasses'] = array('string');
$meta['restrictionType'] = array('multichoice','_choices' => array(0,1));
$meta['syntaxDiv'] = array('multichoice','_choices' => array('WRAP','block', 'div'));
$meta['syntaxSpan'] = array('multichoice','_choices' => array('wrap', 'inline', 'span'));
$meta['darkTpl'] = array('onoff');
$meta['emulatedHeadlines'] = array('onoff');

/*
  the syntaxNoteMode = standard is needed for backward compatibilty with the original version of Wrap
*/
$meta['syntaxNoteMode'] = array('multichoice','_choices' => array('standard','note modern','note basic','note basic-icon', 'note condensed'));
$meta['syntaxNoteAlign'] = array('multichoice','_choices' => array('left','center','right'));
$meta['syntaxNoteType'] = array('multichoice','_choices' => array('rectangle','round'));
$meta['syntaxNoteSize'] = array('string');
$meta['syntaxNoteHeading'] = array('onoff');
$meta['syntaxNoteHeadingSize'] = array('multichoice','_choices' => array('H3','H4'));