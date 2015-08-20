<?php
/**
* @title		Float Social
* @package		Joomla
* @website		http://www.shakingweb.com
* @copyleft             Copyleft () 2013
* @license		GNU/GPLv2, see lgpl.txt
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
// include the helper file
//require_once(dirname(__FILE__).DS.'helper.php');
// get a parameter from the module's configuration
$position = $params->get('position');

$google_plus_button_language = $params->get('google_plus_button_language');
$google_plus_button_url = $params->get('google_plus_button_url');

$facebook_button_data_show_faces = $params->get('facebook_button_data_show_faces');
$facebook_button_data_send = $params->get('facebook_button_data_send');
$facebook_button_url = $params->get('facebook_button_url');

$twitter_button_url = $params->get('twitter_button_url');
$twitter_button_via = $params->get('twitter_button_via');

$linkedin_button_language = $params->get('linkedin_button_language');
$linkedin_button_url = $params->get('linkedin_button_url');

// get the items to display from the helper
//$items = ModFloatSocialHelper::getItems($userCount);

// include the template for display
require(JModuleHelper::getLayoutPath('mod_float_social'));

?>