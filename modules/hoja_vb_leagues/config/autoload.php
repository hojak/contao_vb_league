<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Hoja_vb_leagues
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentHoJaDvv3lIfr'  => 'system/modules/hoja_vb_leagues/ContentHoJaDvv3lIfr.php',
	'ContentHoJaWvvIframe' => 'system/modules/hoja_vb_leagues/ContentHoJaWvvIframe.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_hoja_wvv_iframe'   => 'system/modules/hoja_vb_leagues/templates',
	'ce_hoja_dvv3l_iframe' => 'system/modules/hoja_vb_leagues/templates',
));
