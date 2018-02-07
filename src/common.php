<?php

include "phar://markdown.phar/Parsedown.php";

$version           = "0.2.1";
$parsedown_version = Parsedown::version;

$args = join(" ",$argv);
if (preg_match("/--help|-h/",$args)) {
	usage();
	exit;
}

////////////////////////////////////////////////

// From a file
//if (isset($argv[1]) && is_readable($argv[1])) {
if (isset($argv[1])) {

	$str = @file_get_contents($argv[1]);
	// From STDIN

	if ($str === false) {
		print "Error: file '" . $argv[1] . "' is not readable\n";
		exit(10);
	}
} else {
	$str = file_get_contents("php://stdin");
}

$parsedown = new Parsedown();
print $parsedown->parse($str);

////////////////////////////////////////////////

function usage() {
	global $version;
	global $parsedown_version;

	print "MarkdownCLI Version: $version\n";
	print "  Parsedown Version: $parsedown_version\n";
	print "\n";
	print "Usage: markdown input.md\n";
}
