<?php
/*-------------------------------------------------------------------------------
# JD Simple Social Share module for Joomla 3.x v1.0.0
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
JHtml::_('bootstrap.framework');
// Import the file / foldersystem
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$LiveSite 	= JURI::base(true);
$document = JFactory::getDocument();
$modbase = JURI::base(true).'/modules/mod_dsss/';
$styleSize  = $params->get('styleSize');

if ($styleSize == "1") {
  $document->addStyleSheet($modbase.'css/dsss_small.css');
}

if ($styleSize == "2") {
  $document->addStyleSheet($modbase.'css/dsss_medium.css');
}

if ($styleSize == "3") {
  $document->addStyleSheet($modbase.'css/dsss_large.css');
}

$showFacebook  = $params->get('showFacebook', 1);
$showTwitter  = $params->get('showTwitter', 1);
$showGoogle  = $params->get('showGoogle', 1);
$showTumblr  = $params->get('showTumblr', 1);
$showEmail  = $params->get('showEmail', 1);
$showPinterest  = $params->get('showPinterest', 1);
$showLinkedin  = $params->get('showLinkedin', 1);
$showReddit  = $params->get('showReddit', 1);
$showXING  = $params->get('showXING', 1);
$showWhatsapp  = $params->get('showWhatsapp', 1);
$moduleID = $module->id;
require JModuleHelper::getLayoutPath('mod_dsss','default',$params);
?>
