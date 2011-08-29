# i-got-issues

Display your submitted issues in your own projects, a.k.a. "todos"...

## requirements

Global git setting `github.user`, matching your username.

## usage
```php
php index.php
```

## example output

cli/cgi is automatically detected

### cli

```
keyboard-navigate - Lightweight plugin to apply keyboard supported navigation through commonly
used hotkeys. (https://github.com/chelmertz/keyboard-navigate)
=================
#1 Add CTRL/CMD+S-shortcut (2010-11-22)
#2 Provide options for classnames (2011-01-13)
#3 Make sure there aren't any edge cases (2011-01-13)
#4 Scroll to, instead of click (2011-08-29)

fineprint - Focus a user's attention on fragments of your long document (https://github.com/chelmertz/fineprint)
=========
#2 Scroll page in done() (2010-11-26)
#4 clear() (2010-12-03)
#5 Make sure the highlighted text is in the viewport (2011-01-11)

PDFBox-php - PHP façade for Apache's PDFBox (https://github.com/chelmertz/PDFBox-php)
==========
#1 Escape calls to system (2011-08-15)

dotfiles -  (https://github.com/chelmertz/dotfiles)
========
#3 Add brew formulas from home (2011-08-29)

picture-this - tiny image generator in php (https://github.com/chelmertz/picture-this)
============
#1 Display warning in image if input is invalid (2011-08-19)

bookshelf - link roulette in php (https://github.com/chelmertz/bookshelf)
=========
#1 Add command to view random post from given delicious-tag (2011-08-22)
```

### html

```html

<!doctype html> 
<html> 
<head> 
        <title>I got issues</title> 
                <meta charset="utf-8" /> 
                </head> 
<body><pre> 
keyboard-navigate - Lightweight plugin to apply keyboard supported navigation through commonly 
used hotkeys. (<a href="https://github.com/chelmertz/keyboard-navigate">https://github.com/chelmertz/keyboard-navigate</a>) 
================= 
#1 <a href="https://github.com/chelmertz/keyboard-navigate/issues/1">Add CTRL/CMD+S-shortcut</a> (2010-11-22) 
#2 <a href="https://github.com/chelmertz/keyboard-navigate/issues/2">Provide options for classnames</a> (2011-01-13) 
#3 <a href="https://github.com/chelmertz/keyboard-navigate/issues/3">Make sure there aren't any edge cases</a> (2011-01-13) 
#4 <a href="https://github.com/chelmertz/keyboard-navigate/issues/4">Scroll to, instead of click</a> (2011-08-29) 
 
fineprint - Focus a user's attention on fragments of your long document (<a href="https://github.com/chelmertz/fineprint">https://github.com/chelmertz/fineprint</a>) 
========= 
#2 <a href="https://github.com/chelmertz/fineprint/issues/2">Scroll page in done()</a> (2010-11-26) 
#4 <a href="https://github.com/chelmertz/fineprint/issues/4">clear()</a> (2010-12-03) 
#5 <a href="https://github.com/chelmertz/fineprint/issues/5">Make sure the highlighted text is in the viewport</a> (2011-01-11) 
 
PDFBox-php - PHP façade for Apache's PDFBox (<a href="https://github.com/chelmertz/PDFBox-php">https://github.com/chelmertz/PDFBox-php</a>) 
========== 
#1 <a href="https://github.com/chelmertz/PDFBox-php/issues/1">Escape calls to system</a> (2011-08-15) 
 
dotfiles -  (<a href="https://github.com/chelmertz/dotfiles">https://github.com/chelmertz/dotfiles</a>) 
======== 
#3 <a href="https://github.com/chelmertz/dotfiles/issues/3">Add brew formulas from home</a> (2011-08-29) 
 
picture-this - tiny image generator in php (<a href="https://github.com/chelmertz/picture-this">https://github.com/chelmertz/picture-this</a>) 
============ 
#1 <a href="https://github.com/chelmertz/picture-this/issues/1">Display warning in image if input is invalid</a> (2011-08-19) 
 
bookshelf - link roulette in php (<a href="https://github.com/chelmertz/bookshelf">https://github.com/chelmertz/bookshelf</a>) 
========= 
#1 <a href="https://github.com/chelmertz/bookshelf/issues/1">Add command to view random post from given delicious-tag</a> (2011-08-22) 
</pre></body> 
</html>
```
