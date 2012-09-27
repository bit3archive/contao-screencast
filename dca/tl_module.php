<?php

/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['screencast_list'] = '{title_legend},name,headline,type;{config_legend},screencast_archives;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['screencast_archives'] = array(
    'label'      => $GLOBALS['TL_LANG']['tl_module']['screencast_archives'],
    'inputType'  => 'select',
    'foreignKey' => 'tl_screencast_archive.title',
    'eval'       => array('mandatory' => true)
);
