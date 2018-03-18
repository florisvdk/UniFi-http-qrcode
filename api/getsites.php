<?php

// load required files

require_once ('../includes/php/settings.php');
require_once ('../includes/php/unifi-api-client/client.php');

$sites  = array();

// get data from unifi controller

$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, 'default', $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

// get client and device info

$sites_array = $unifi_connection->list_sites();

// loop trugh sites

array_push($sites, array('', ''));

foreach ($sites_array as $site) {
	
	array_push($sites, array($site->name, $site->desc));
	
}

echo json_encode($sites);

?>