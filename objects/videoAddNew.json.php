<?php

//error_reporting(0);
header('Content-Type: application/json');
if (empty($global['systemRootPath'])) {
    $global['systemRootPath'] = '../';
}
require_once $global['systemRootPath'] . 'videos/configuration.php';
require_once $global['systemRootPath'] . 'objects/user.php';
if (!User::canUpload()) {
    die('{"error":"' . __("Permission denied") . '"}');
}

$msg = "";
$info = $infoObj = "";
require_once 'video.php';

if (!empty($_POST['id'])) {
    if (!Video::canEdit($_POST['id'])) {
        die('{"error":"' . __("Permission denied") . '"}');
    }
}

if (!is_writable("{$global['systemRootPath']}objects/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer")) {
    //Directory /home/daniel/danielneto.com@gmail.com/htdocs/AVideo/objects/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer not writable, please chmod to 777 
    die('{"error":"Directory ' . $global['systemRootPath'] . 'objects/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer not writable, please chmod to 777 "}');
}

TimeLogStart(__FILE__);

$obj = new Video($_POST['title'], "", @$_POST['id']);

TimeLogEnd(__FILE__, __LINE__);

$obj->setClean_Title($_POST['clean_title']);
$audioLinks = array('mp3', 'ogg');
$videoLinks = array('mp4', 'webm', 'm3u8');
TimeLogEnd(__FILE__, __LINE__);
if (!empty($_POST['videoLink'])) {
    //var_dump($config->getEncoderURL()."getLinkInfo/". base64_encode($_POST['videoLink']));exit;
    $path_parts = pathinfo($_POST['videoLink']);
    $extension = strtolower(@$path_parts["extension"]);
    if (empty($_POST['id']) && !(in_array($extension, $audioLinks) || in_array($extension, $videoLinks))) {
        $info = url_get_contents($config->getEncoderURL() . "getLinkInfo/" . base64_encode($_POST['videoLink']));
        $infoObj = json_decode($info);
        $filename = uniqid("_YPTuniqid_", true);
        $filename = $obj->setFilename($filename);
        $obj->setTitle($infoObj->title);
        $obj->setClean_title($infoObj->title);
        $obj->setDuration($infoObj->duration);
        $obj->setDescription($infoObj->description);
        file_put_contents($global['systemRootPath'] . "videos/{$filename}.jpg", base64_decode($infoObj->thumbs64));
        $_POST['videoLinkType'] = "linkVideo";
    } else if (empty($_POST['id'])) {
        $filename = uniqid("_YPTuniqid_", true);
        $filename = $obj->setFilename($filename);
        $obj->setTitle($path_parts["filename"]);
        $obj->setClean_title($path_parts["filename"]);
        $obj->setDuration("");
        $obj->setDescription(@$_POST['description']);
        $_POST['videoLinkType'] = "embed";
    }
    $obj->setVideoLink($_POST['videoLink']);

    if (in_array($extension, $audioLinks) || in_array($extension, $videoLinks)) {
        if (in_array($extension, $audioLinks)) {
            $obj->setType('linkAudio');
        } else {
            $obj->setType('linkVideo');
        }
    } else if(!empty($obj->getType())){
        $obj->setType('embed');
    }

    if (!empty($_POST['videoLinkType'])) {
        $obj->setType($_POST['videoLinkType']);
    }
    if (empty($_POST['id'])) {
        $obj->setStatus('a');
    }
}else if(!empty($obj->getType()) && ($obj->getType() == 'video' || $obj->getType() == 'serie' || $obj->getType() == 'audio')){
    $obj->setVideoLink("");
}
    
TimeLogEnd(__FILE__, __LINE__);
if (!empty($_POST['isArticle'])) {
    $obj->setType("article");
    if (empty($_POST['id'])) {
        $obj->setStatus('a');
    }
    $filename = uniqid("_YPTuniqid_", true);
    $filename = $obj->setFilename($filename);
}
TimeLogEnd(__FILE__, __LINE__);
$obj->setNext_videos_id($_POST['next_videos_id']);
if (!empty($_POST['description'])) {
    $obj->setDescription($_POST['description']);
}
if (empty($advancedCustomUser->userCanNotChangeCategory) || User::isAdmin()) {
    $obj->setCategories_id($_POST['categories_id']);
}

if (empty($advancedCustomUser->userCanNotChangeUserGroup) || User::isAdmin()) {
    $obj->setVideoGroups(empty($_POST['videoGroups']) ? array() : $_POST['videoGroups']);
}
if (User::isAdmin()) {
    $obj->setUsers_id($_POST['users_id']);
}

TimeLogEnd(__FILE__, __LINE__);
$obj->setCan_download(@$_POST['can_download']);
$obj->setCan_share(@$_POST['can_share']);
$obj->setOnly_for_paid(@$_POST['only_for_paid']);
$obj->setVideo_password(@$_POST['video_password']);
$obj->setTrailer1(@$_POST['trailer1']);
$obj->setRrating(@$_POST['rrating']);
$obj->setExternalOptions(@$_POST['externalOptions']);

TimeLogEnd(__FILE__, __LINE__);
$resp = $obj->save(true);
// if is a new embed video
if (empty($_POST['id']) && $obj->getType() == 'embed') {
    AVideoPlugin::afterNewVideo($resp);
}

AVideoPlugin::saveVideosAddNew($_POST, $resp);
TimeLogEnd(__FILE__, __LINE__);
$obj = new stdClass();
$obj->status = !empty($resp);
$obj->msg = $msg;
$obj->info = json_encode($info);
$obj->infoObj = json_encode($infoObj);
$obj->videos_id = intval($resp);
$obj->video = Video::getVideo($obj->videos_id, false, true);
TimeLogEnd(__FILE__, __LINE__);
echo json_encode($obj);
