<?php
$srcRoot = "./src";
$buildRoot = "./build";

$phar = new Phar(
	$buildRoot . "/projectExport.phar", 
    FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,
    "projectExport.phar"
);

$phar["index.php"] = file_get_contents($srcRoot . "/index.php");
$phar["common.php"] = file_get_contents($srcRoot . "/common.php");
$phar->setStub($phar->createDefaultStub("index.php"));
 
copy($srcRoot . "/config.ini", $buildRoot . "/config.ini");
