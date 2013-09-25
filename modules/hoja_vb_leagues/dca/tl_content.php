<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');


$GLOBALS['TL_DCA']['tl_content']['palettes']['hoja_wvv_iframe_ce']                       
	= '{type_legend},type,headline;{hoja_wvv_iframe_legend},hoja_vb_wvv_league,hoja_vb_wvv_option,hoja_vb_width,hoja_vb_height;{expert_legend:hide},guests,invisible,cssID,space';
	
$GLOBALS['TL_DCA']['tl_content']['palettes']['hoja_dvv3l_iframe_ce']                       
	= '{type_legend},type,headline;{hoja_wvv_iframe_legend},hoja_vb_dvv3l_league,hoja_vb_dvv3l_option,hoja_vb_width,hoja_vb_height;{expert_legend:hide},guests,invisible,cssID,space';
	
	
$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_vb_wvv_league'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_wvv_league'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength' => 10, 'tl_class'=>'w50' )
);
$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_vb_dvv3l_league'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_dvv3l_league'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength' => 10, 'tl_class'=>'w50' )
);
$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_vb_wvv_option'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_wvv_option'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_wvv_option_labels'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_vb_dvv3l_option'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_dvv3l_option'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'				  => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_dvv3l_option_labels'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_vb_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_width'],
	'exclude'                 => true,
	'inputType'               => 'inputUnit',
	'options'				  => array ("px", "%", "em" ),
	'eval'                    => array('mandatory'=>true, 'maxlength' => 4, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_vb_height'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['hoja_vb_height'],
	'exclude'                 => true,
	'inputType'               => 'inputUnit',
	'options'				  => array ("px", "%", "em" ),
	'eval'                    => array('mandatory'=>true, 'maxlength' => 4, 'tl_class'=>'w50')
);

