<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2021 Leo Feyer
 *
 * @package   Opengraph3
 * @author    Benny Born <benny.born@numero2.de>
 * @author    Michael Bösherz <michael.boesherz@numero2.de>
 * @license   LGPL
<<<<<<< HEAD:src/Resources/contao/dca/tl_storelocator_stores.php
 * @copyright 2021 numero2 - Agentur für digitales Marketing GbR
=======
 * @copyright 2017 numero2 - Agentur für digitales Marketing
>>>>>>> master:dca/tl_storelocator_stores.php
 */


if( !empty($GLOBALS['TL_DCA']['tl_storelocator_stores']) ) {

    \Controller::loadDataContainer('opengraph_fields');

    /**
     * Modify palettes
     */
    $GLOBALS['TL_DCA']['tl_storelocator_stores']['palettes']['default'] = str_replace(
        '{adress_legend'
    ,   $GLOBALS['TL_DCA']['opengraph_fields']['palettes']['default'].'{adress_legend'
    ,   $GLOBALS['TL_DCA']['tl_storelocator_stores']['palettes']['default']
    );

    /**
     * Modify fields
     */
    $GLOBALS['TL_DCA']['tl_storelocator_stores']['fields'] = array_merge(
        $GLOBALS['TL_DCA']['tl_storelocator_stores']['fields']
    ,   $GLOBALS['TL_DCA']['opengraph_fields']['fields']
    );

    /**
     * Add legends
     */
    if( !empty($GLOBALS['TL_LANG']['opengraph_fields']['legends']) ) {

        array_walk(
            $GLOBALS['TL_LANG']['opengraph_fields']['legends']
            ,   function( $translation, $key ) {
                $GLOBALS['TL_LANG']['tl_storelocator_stores'][$key] = $translation;
            }
        );
    }

    /**
     * Restrict available types
     */
    $GLOBALS['TL_DCA']['tl_storelocator_stores']['config']['allowedOpenGraphTypes'] = ['business.business', 'place'];
}