<?php

$args = join(" ",$argv);
$version = "0.1";

if (preg_match("/--help|-h/",$args)) {
	usage();
	exit;
}

include "phar://markdown.phar/Parsedown.php";

////////////////////////////////////////////////

// From a file
//if (isset($argv[1]) && is_readable($argv[1])) {
if (isset($argv[1])) {

	$str = @file_get_contents($argv[1]);
	// From STDIN

	if ($str === false) {
		print "File '" . $argv[1] . "' is not readable\n";
		exit(10);
	}
} else {
	$str = file_get_contents("php://stdin");
}

print Parsedown::instance()->parse($str);

function usage() {
	global $version;

	print "MarkdownCLI Version: $version\n";
	//print "  Parsedown Version: $version\n";
	print "\n";
	print "Usage: markdown input.md\n";
}
