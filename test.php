<?php

require_once  './vendor/autoload.php' ;

use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Data\JsFunction;

$puppeteer = new Puppeteer;

$browser   = $puppeteer->launch();

$page = $browser->newPage();
$page->goto('https://kojirooooocks.hatenablog.com/');
$page->type('.search-module-input', 'laravel');
$page->click('.search-module-button');
$page->screenshot(['path' => 'example2.png']);
$browser->close();