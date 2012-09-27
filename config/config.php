<?php

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['screencast'] = array(
	'screencasts' => array(
		'tables' => array('tl_screencast_archive', 'tl_screencast'),
        'icon'   => 'system/modules/screencast/assets/images/icon.png',
	)
);


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['screencast'] = array(
    'screencast_list' => 'ModuleScreencastList'
);

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['screencast'] = array(
    'screencast_viewer' => 'ContentScreencastViewer'
);
