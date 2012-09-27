<?php

/**
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['screencast_viewer'] = '{type_legend},type,headline;{screencast_legend},screencast;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['screencast'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['screencast'],
    'inputType'        => 'select',
    'options_callback' => array('DataContainerScreencast', 'getScreencastOptions'),
    'eval'             => array('mandatory'          => true,
                                'chosen'             => true,
                                'includeBlankOption' => true)
);
