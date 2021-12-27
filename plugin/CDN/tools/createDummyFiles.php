<?php

$config = dirname(__FILE__) . '/../../../videos/configuration.php';
require_once $config;

if (!isCommandLineInterface()) {
    return die('Command Line only');
}

$isCDNEnabled = AVideoPlugin::isEnabledByName('CDN');

if (empty($isCDNEnabled)) {
    return die('Plugin disabled');
}


ob_end_flush();
set_time_limit(300);
ini_set('max_execution_time', 300);
error_reporting(E_ALL);
ini_set('display_errors', '1');

$sql = "SELECT * FROM  videos WHERE ORDER BY id DESC ";

$sql .= self::getSqlFromPost();
$res = sqlDAL::readSql($sql);
$fullData = sqlDAL::fetchAllAssoc($res);
sqlDAL::close($res);
$rows = array();
if ($res != false) {
    foreach ($fullData as $row) {
        if (!empty($row['sites_id'])) {
            echo "sites_id is not empty {$row['sites_id']}" . PHP_EOL;
            CDNStorage::createDummyFiles($row['id']);
        }
    }
} else {
    die($sql . '\nError : (' . $global['mysqli']->errno . ') ' . $global['mysqli']->error);
}
echo PHP_EOL . " Done! " . PHP_EOL;
die();

