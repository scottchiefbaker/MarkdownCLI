#!/bin/bash

rm -f ../parsedown
php create-phar.php
mv ../parsedown.phar ../parsedown
chmod a+x ../parsedown
