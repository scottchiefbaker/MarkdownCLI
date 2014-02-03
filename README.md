Markdown parser
===============

This is a command line parser for Markdown text. It uses the [Parsedown](http://parsedown.org/)
library in a standalone PHP .phar file.

Usage
-----

File mode:
```
parsedown README.md
```

STDIN mode:
```
cat README.md | parsedown
```

Requires
--------
PHP 5.3.0 or greater must be installed
