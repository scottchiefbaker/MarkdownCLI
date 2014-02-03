<?php

$buildRoot = "../";
$app_name = 'parsedown';

$phar = new Phar($buildRoot . "/$app_name.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "$app_name.phar");

$phar["index.php"]     = file_get_contents("index.php");
$phar["Parsedown.php"] = file_get_contents("Parsedown.php");
$phar["common.php"]    = file_get_contents("common.php");

// start buffering. Mandatory to modify stub.
$phar->startBuffering();

$def_stub = $phar->createDefaultStub("index.php");

// Create a custom stub to add the shebang
$stub = "#!/usr/bin/env php \n" . $def_stub;

// Add the stub
$phar->setStub($stub);

$phar->stopBuffering();
