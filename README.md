# L33t Hax0rzzz Unit Testing

* A L33tsp3ak translator built to practice unit testing in PHP

#### February 13, 2017

#### By **Jason Brown & Zach Swanson**

## Description
  Practice unit testing in PHP.

| Behavior | Input Example | Output Example |
|----------|---------------|----------------|
|User inputs a text string, app displays the string | "I am Elite" | "I am elite"|
|User inputs a text string, app replaces all "e" characters with "3" | "I am Elite" | "I am 3lit3"|
|User inputs a text string, app replaces all "o" characters with "0" | "I am so Elite " | "I am s0 3lit3"|
|User inputs a text string, app replaces all "I" characters with "1" | "I am Elite" | "1 am 3lit3"|
|User inputs a text string, app replaces all "s" characters with "z", unless they are the first character in a word | "I am write Elite codes" | "1 am writ3 3lit3 c0d3z"|


## Setup/Installation Requirements

*  Clone github repository for places webpage
*  From your parent directory in terminal, run "$ composer install"
*  Run php server in terminal (from web directory) by typing "$ php -S localhost:8000"
*  in your browser type "localhost:8000"
*  Webpage will load.

## Known Bugs
_No known bugs exist._

## Technologies Used
* _HTML_
* _PHP_
* _TWIG_
* _SILEX_
* _Composer_


### License
*MIT

Copyright (c) 2017 Jason Brown & Zach Swanson All Rights Reserved.
