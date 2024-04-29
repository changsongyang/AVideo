<?php
require_once '../../../../videos/configuration.php';
require_once $global['systemRootPath'] . 'plugin/SocialMediaPublisher/Objects/Publisher_social_medias.php';
header('Content-Type: application/json');

$obj = new stdClass();
$obj->error = true;

$plugin = AVideoPlugin::loadPluginIfEnabled('SocialMediaPublisher');

if(!User::isAdmin()){
    $obj->msg = "You cant do this";
    die(json_encode($obj));
}

$id = intval($_POST['id']);
$row = new Publisher_social_medias($id);
$obj->error = !$row->delete();
die(json_encode($obj));
?>