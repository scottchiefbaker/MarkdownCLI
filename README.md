Markdown parser
===============

This is a command line parser for Markdown text. It uses the Parsedown
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