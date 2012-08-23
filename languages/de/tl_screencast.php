<?php if (!defined('TL_ROOT')) {
    die('You cannot access this file directly!');
}

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_screencast']['title']      = array('Titel', 'Bitte geben Sie den Nachrichten-Titel ein.');
$GLOBALS['TL_LANG']['tl_screencast']['alias']      = array('Screencastalias',
                                                           'Der Screencastalias ist eine eindeutige Referenz, die anstelle der numerischen ID aufgerufen werden kann.');
$GLOBALS['TL_LANG']['tl_screencast']['author']     = array('Autor', 'Hier können Sie den Autor des Screencasts ändern.');
$GLOBALS['TL_LANG']['tl_screencast']['youtube_id'] = array('YouTube ID',
                                                           'Bitte geben Sie hier die ID des YouTube Videos an.');
$GLOBALS['TL_LANG']['tl_screencast']['published']  = array('Screencast veröffentlichen',
                                                           'Den Screencast auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_screencast']['start']      = array('Anzeigen ab',
                                                           'Den Screencast erst ab diesem Tag auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_screencast']['stop']       = array('Anzeigen bis',
                                                           'Den Screencast nur bis zu diesem Tag auf der Webseite anzeigen.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_screencast']['title_legend']     = 'Titel und Autor';
$GLOBALS['TL_LANG']['tl_screencast']['publish_legend']   = 'Veröffentlichung';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_screencast']['new']        = array('Neuer Screencast', 'Einen neuen Screencast erstellen');
$GLOBALS['TL_LANG']['tl_screencast']['show']       = array('Screencastdetails',
                                                           'Die Details des Screencasts ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_screencast']['edit']       = array('Screencast bearbeiten', 'Screencast ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_screencast']['copy']       = array('Screencast duplizieren', 'Screencast ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_screencast']['cut']        = array('Screencast verschieben', 'Screencast ID %s verschieben');
$GLOBALS['TL_LANG']['tl_screencast']['delete']     = array('Screencast löschen', 'Screencast ID %s löschen');
$GLOBALS['TL_LANG']['tl_screencast']['toggle']     = array('Screencast veröffentlichen/unveröffentlichen',
                                                           'Screencast ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_screencast']['feature']    = array('Screencast hervorheben/zurücksetzen',
                                                           'Screencast ID %s hervorheben/zurücksetzen');
$GLOBALS['TL_LANG']['tl_screencast']['editheader'] = array('Nachrichtenarchiv bearbeiten',
                                                           'Die Nachrichtenarchiv-Einstellungen bearbeiten');
$GLOBALS['TL_LANG']['tl_screencast']['pasteafter'] = array('In dieses Nachrichtenarchiv einfügen',
                                                           'Nach dem Screencast ID %s einfügen');
