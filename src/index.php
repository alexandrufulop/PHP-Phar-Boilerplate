<?php
require_once "phar://projectExport.phar/common.php";
$config = parse_ini_file("config.ini");
AppManager::run($config);	