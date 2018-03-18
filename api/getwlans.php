<?php

// load required files

require_once ('../includes/php/settings.php');
require_once ('../includes/php/unifi-api-client/client.php');

$wlans  = array();

// get data from unifi controller

$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $_GET["site"], $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

// get client and device info

$wlans_array = $unifi_connection->list_wlanconf();

// loop trugh wlans

array_push($wlans, array('', ''));

foreach ($wlans_array as $wlan) {
	
	array_push($wlans, array($wlan->name, $wlan->security));
	
}

echo json_encode($wlans);

?>