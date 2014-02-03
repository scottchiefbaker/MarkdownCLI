<?php

$buildRoot = "../";
$app_name = 'parsedown';

$phar = new Phar($buildRoot . "/$app_name.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "$app_name.phar");

$phar["index.php"]     = file_get_contents("index.php");
$phar["Parsedown.php"] = file_get_contents("Parsedown.php");
$phar["common.php"]    = file_get_contents("common.php");

$phar->setStub($phar->createDefaultStub("index.php"));
