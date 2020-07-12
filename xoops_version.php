<?php
//  ------------------------------------------------------------------------ //
//                xsGallery - XOOPS Simple Gallery Module                    //
//                            Versi�n 1.3                                    //
//                   Copyright (c) 2007 Dana Harris                          //
//                       http://www.optikool.com                             //
// ------------------------------------------------------------------------- //
//  Based on Saurdo Gallery                                                  //
//  Creator: Saurdo - www.saurdo.com / me@saurdo.com                         //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$modversion['name'] = _MI_XSGAL_NAME;
$modversion['version'] = 1.4;
$modversion['description'] = _MI_XCGAL_DESC;
$modversion['author'] = "Mowaffak - www.arabxoops.com and optikool - www.optikool.com";
$modversion['credits'] = "based on Saurdo Gallery - www.saurdo.com";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/logo.gif";
$modversion['dirname'] = "xsgal";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "xsgal_collection";

// Menu
$modversion['hasMain'] = 1;

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Templates
$modversion['templates'][1]['file'] = "xsgal_index.html";
$modversion['templates'][1]['description'] = "The template file of the index xsgal file";


// Blocks
$modversion['blocks'][1]['file'] = "xsgal_block_rimages.php";
$modversion['blocks'][1]['name'] = _MI_XSGAL_BNAME1;
$modversion['blocks'][1]['description'] = "Shows five latest galleries";
$modversion['blocks'][1]['show_func'] = "b_recent_gallery_show";
$modversion['blocks'][1]['template'] = "xsgal_block_rimages.html";

// Config Settings

// name of config option for accessing its specified value. i.e. $xoopsModuleConfig['storyhome']
$modversion['config'][1]['name'] = 'gallery_address';
// title of this config option displayed in config settings form
$modversion['config'][1]['title'] = '_MI_XSGAL_GAL_ADD';
// description of this config option displayed under title
$modversion['config'][1]['description'] = '_MI_XSGAL_GAL_ADD_DESC';
// form element type used in config form for this option. can be one of either textbox, textarea, select, select_multi, yesno, group, group_multi
$modversion['config'][1]['formtype'] = 'texbox';
// value type of this config option. can be one of either int, text, float, array, or other
// form type of 'group_multi', 'select_multi' must always be 'array'
// form type of 'yesno', 'group' must be always be 'int'
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = 'gal';
// the default value for this option
// ignore it if no default
// 'yesno' formtype must be either 0(no) or 1(yes)
//$modversion['config'][1]['default'] = 100;
// options to be displayed in selection box
// required and valid for 'select' or 'select_multi' formtype option only
// language constants can be used for both array keys and values
//$modversion['config'][1]['options'] = array('5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000);

$modversion['config'][2]['name'] = 'modDir';
$modversion['config'][2]['title'] = '_MI_XSGAL_MODDIR';
$modversion['config'][2]['description'] = '_MI_XSGAL_MODDIR_DESC';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = 'xsgal';

$modversion['config'][3]['name'] = 'recentImagesDir';
$modversion['config'][3]['title'] = '_MI_XSGAL_RECIMGDIR';
$modversion['config'][3]['description'] = '_MI_XSGAL_RECIMGDIR_DESC';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = 'xsgal';

$modversion['config'][4]['name'] = 'recentTotal';
$modversion['config'][4]['title'] = '_MI_XSGAL_RECTOTAL';
$modversion['config'][4]['description'] = '_MI_XSGAL_RECTOTAL_DESC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 4;

$modversion['config'][5]['name'] = 'excluded_folders';
$modversion['config'][5]['title'] = '_MI_XSGAL_EXCL_FOLD';
$modversion['config'][5]['description'] = '_MI_XSGAL_EXCL_FOLD_DESC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = 'cgi-bin';

$modversion['config'][6]['name'] = 'images_per_page';
$modversion['config'][6]['title'] = '_MI_XSGAL_IMG_PER_PAGE';
$modversion['config'][6]['description'] = '_MI_XSGAL_IMG_PER_PAGE_DESC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'int';
$modversion['config'][6]['default'] = 20;

$modversion['config'][7]['name'] = 'pictwidth';
$modversion['config'][7]['title'] = '_MI_XSGAL_PICTWTH';
$modversion['config'][7]['description'] = '_MI_XSGAL_PICTWTH_DESC';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'int';
$modversion['config'][7]['default'] = 600;

$modversion['config'][8]['name'] = 'pictheight';
$modversion['config'][8]['title'] = '_MI_XSGAL_PICTHI';
$modversion['config'][8]['description'] = '_MI_XSGAL_PICTHI_DESC';
$modversion['config'][8]['formtype'] = 'textbox';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 600;

$modversion['config'][9]['name'] = 'picinfwidth'; 
$modversion['config'][9]['title'] = '_MI_XSGAL_PICTINFWTH';
$modversion['config'][9]['description'] = '_MI_XSGAL_PICTINFWTH_DESC';
$modversion['config'][9]['formtype'] = 'textbox';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 600;

$modversion['config'][10]['name'] = 'picinfheight';
$modversion['config'][10]['title'] = '_MI_XSGAL_PICINFTHI';
$modversion['config'][10]['description'] = '_MI_XSGAL_PICINFTHI_DESC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'int';
$modversion['config'][10]['default'] = 600;

$modversion['config'][11]['name'] = 'thumbwidth';
$modversion['config'][11]['title'] = '_MI_XSGAL_THUMBWTH';
$modversion['config'][11]['description'] = '_MI_XSGAL_THUMBWTH_DESC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'int';
$modversion['config'][11]['default'] = 100;

$modversion['config'][12]['name'] = 'thumbheight';
$modversion['config'][12]['title'] = '_MI_XSGAL_THUMBHI';
$modversion['config'][12]['description'] = '_MI_XSGAL_THUMBHI_DESC';
$modversion['config'][12]['formtype'] = 'textbox';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 100;

$modversion['config'][13]['name'] = 'f_cols';
$modversion['config'][13]['title'] = '_MI_XSGAL_F_COLS';
$modversion['config'][13]['description'] = '_MI_XSGAL_F_COLS_DESC';
$modversion['config'][13]['formtype'] = 'textbox';
$modversion['config'][13]['valuetype'] = 'int';
$modversion['config'][13]['default'] = 4;

$modversion['config'][14]['name'] = 'thumbnail_cols';
$modversion['config'][14]['title'] = '_MI_XSGAL_THUMB_COLS';
$modversion['config'][14]['description'] = '_MI_XSGAL_THUMB_COLS_DESC';
$modversion['config'][14]['formtype'] = 'textbox';
$modversion['config'][14]['valuetype'] = 'int';
$modversion['config'][14]['default'] = 5;

$modversion['config'][15]['name'] = 'enable_marquee';
$modversion['config'][15]['title'] = '_MI_XSGAL_MARQUEE';
$modversion['config'][15]['description'] = '_MI_XSGAL_MARQUEE_DESC';
$modversion['config'][15]['formtype'] = 'yesno';
$modversion['config'][15]['valuetype'] = 'int';
$modversion['config'][15]['default'] = 0;

$modversion['config'][16]['name'] = 'marquee_direction';
$modversion['config'][16]['title'] = '_MI_XSGAL_MARQUEE_DIRECTION';
$modversion['config'][16]['description'] = '_MI_XSGAL_MARQUEE_DIRECTION_DESC';
$modversion['config'][16]['formtype'] = 'select';
$modversion['config'][16]['valuetype'] = 'text';
$modversion['config'][16]['options'] = array('_MI_XSGAL_MARQUEE_UP' => 'up', '_MI_XSGAL_MARQUEE_DOWN' => 'down', '_MI_XSGAL_MARQUEE_LEFT' => 'left', '_MI_XSGAL_MARQUEE_RIGHT' => 'right');
$modversion['config'][16]['default'] = 'up';

$modversion['config'][17]['name'] = 'marquee_width';
$modversion['config'][17]['title'] = '_MI_XSGAL_MARQUEE_WIDTH';
$modversion['config'][17]['description'] = '_MI_XSGAL_MARQUEE_WIDTH_DESC';
$modversion['config'][17]['formtype'] = 'textbox';
$modversion['config'][17]['valuetype'] = 'int';
$modversion['config'][17]['default'] = 150;

$modversion['config'][18]['name'] = 'marquee_height';
$modversion['config'][18]['title'] = '_MI_XSGAL_MARQUEE_HEIGHT';
$modversion['config'][18]['description'] = '_MI_XSGAL_MARQUEE_HEIGHT_DESC';
$modversion['config'][18]['formtype'] = 'textbox';
$modversion['config'][18]['valuetype'] = 'int';
$modversion['config'][18]['default'] = 200;

$modversion['config'][19]['name'] = 'marquee_scrollamount';
$modversion['config'][19]['title'] = '_MI_XSGAL_MARQUEE_SAMOUNT';
$modversion['config'][19]['description'] = '_MI_XSGAL_MARQUEE_SAMOUNT_DESC';
$modversion['config'][19]['formtype'] = 'textbox';
$modversion['config'][19]['valuetype'] = 'int';
$modversion['config'][19]['default'] = 6;

$modversion['config'][20]['name'] = 'marquee_scrolldelay';
$modversion['config'][20]['title'] = '_MI_XSGAL_MARQUEE_SDELAY';
$modversion['config'][20]['description'] = '_MI_XSGAL_MARQUEE_SDELAY_DESC';
$modversion['config'][20]['formtype'] = 'textbox';
$modversion['config'][20]['valuetype'] = 'int';
$modversion['config'][20]['default'] = 85;

$modversion['config'][21]['name'] = 'show_watermark';
$modversion['config'][21]['title'] = '_MI_XSGAL_WATERMARK';
$modversion['config'][21]['description'] = '_MI_XSGAL_WATERMARK_DESC';
$modversion['config'][21]['formtype'] = 'yesno';
$modversion['config'][21]['valuetype'] = 'int';
$modversion['config'][21]['default'] = 0;

$modversion['config'][22]['name'] = 'text_watermark';
$modversion['config'][22]['title'] = '_MI_XSGAL__TEXTWATERMARK';
$modversion['config'][22]['description'] = '_MI_XSGAL_TEXTWATERMARK_DESC';
$modversion['config'][22]['formtype'] = 'textbox';
$modversion['config'][22]['valuetype'] = 'text';
$modversion['config'][22]['default'] = 'My Website.com';

$modversion['config'][23]['name'] = 'watermark_size';
$modversion['config'][23]['title'] = '_MI_XSGAL__WATERMARKSIZE';
$modversion['config'][23]['description'] = '_MI_XSGAL_WATERMARKSIZE_DESC';
$modversion['config'][23]['formtype'] = 'select';
$modversion['config'][23]['valuetype'] = 'int';
$modversion['config'][23]['options'] = array('_MI_XSGAL_WATERMARKSIZE1' => 1, '_MI_XSGAL_WATERMARKSIZE2' => 2, '_MI_XSGAL_WATERMARKSIZE3' => 3, '_MI_XSGAL_WATERMARKSIZE4' => 4, '_MI_XSGAL_WATERMARKSIZE5' => 5);
$modversion['config'][23]['default'] = 3;

$modversion['config'][24]['name'] = 'allow_fullsizeview';
$modversion['config'][24]['title'] = '_MI_XSGAL_FULLVIEW';
$modversion['config'][24]['description'] = '_MI_XSGAL_FULLVIEW_DESC';
$modversion['config'][24]['formtype'] = 'yesno';
$modversion['config'][24]['valuetype'] = 'int';
$modversion['config'][24]['default'] = 1;

$modversion['config'][25]['name'] = 'show_hits';
$modversion['config'][25]['title'] = '_MI_XSGAL_SHOWHITS';
$modversion['config'][25]['description'] = '_MI_XSGAL_SHOWHITS_DESC';
$modversion['config'][25]['formtype'] = 'yesno';
$modversion['config'][25]['valuetype'] = 'int';
$modversion['config'][25]['default'] = 1;
?>