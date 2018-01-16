<?php
/**
 * @version    1.0.x
 * @package    Call to action
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) Spedi srl.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/* params */
$source = $params->get('source');

switch ($source) {
  case 0:
    $video_url       = $params->get('video-url');
    $video_link      = $params->get('video-link');
    $video_image     = $params->get('video-image');
    $video_caption   = $params->get('video-caption');
    break;
  case 1:
    $videobg_url     = $params->get('videobg-url');
    $videobg_link    = $params->get('videobg-link');
    $videobg_caption = $params->get('videobg-caption');
    break;
}

$document = JFactory::getDocument();
$tmpl     = JFactory::getApplication()->getTemplate();

switch ($params->get('layout', 'default')) {
  case '_:video':
    $document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/video.min.css');
    $litypath = '/templates/'.$tmpl.'/dist/lity/lity.min';
    if($video_url){
      if(file_exists(JPATH_SITE.$litypath).'.css')
        $document->addStyleSheet(JUri::base(true).'/templates/'.$tmpl.'/dist/lity/lity.min.css');
      else
        $document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/lity/lity.min.css');

      if(file_exists(JPATH_SITE.$litypath).'.js')
        $document->addScript(JUri::base(true).'/templates/'.$tmpl.'/dist/lity/lity.min.js');
      else
        $document->addScript(JUri::base(true).'/modules/'.$module->module.'/lity/lity.min.js');
    }
    break;
  case '_:video-bg':
    $document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/video-bg.min.css');
    break;
}

/* style */
require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
