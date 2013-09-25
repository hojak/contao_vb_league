-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

create table `tl_content`(
	`hoja_vb_wvv_league` varchar(10) NULL default NULL,
	`hoja_vb_wvv_option` varchar(5) NULL default NULL,

	`hoja_vb_dvv3l_league` varchar(10) NULL default NULL,
	`hoja_vb_dvv3l_option` varchar(20) NULL default NULL,

	`hoja_vb_width` varchar(100) NULL default NULL,
	`hoja_vb_height` varchar(100) NULL default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

