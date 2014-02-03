#!/bin/bash

rm -f ../markdown
php create-phar.php
mv ../markdown.phar ../markdown
chmod a+x ../markdown
