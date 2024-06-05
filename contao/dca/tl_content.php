<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;

PaletteManipulator::create()
    ->addLegend('text2_legend', 'text_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('text2', 'text2_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('text', 'tl_content');

$GLOBALS['TL_DCA']['tl_content']['fields']['text2'] = [
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('basicEntities'=>true, 'rte'=>'tinyMCE', 'helpwizard'=>true),
    'explanation'             => 'insertTags',
    'sql'                     => "mediumtext NULL"
];
