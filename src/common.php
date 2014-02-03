<?php

$args = join(" ",$argv);
$version = "0.1";

if (preg_match("/--help|-h/",$args)) {
	usage();
	exit;
}

include "phar://parsedown.phar/Parsedown.php";

////////////////////////////////////////////////

// From a file
//if (isset($argv[1]) && is_readable($argv[1])) {
if (isset($argv[1])) {
   $str = file_get_contents($argv[1]);
// From STDIN
} else {
   $str = file_get_contents("php://stdin");
}

print Parsedown::instance()->parse($str);

function usage() {
	print "Usage:\n";
	print "   File mode: parsedown [input.md]\n";
	print "  STDIN mode: cat input.md | parsedown\n";
}
