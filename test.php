<?php

require_once  './vendor/autoload.php' ;

use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Data\JsFunction;

$puppeteer = new Puppeteer;
$browser   = $puppeteer->launch();

$ page  =  $ browser -> newPage () ;
 $ page -> goto ( 'https://github.com/kojirock5260?tab=repositories' ) ;

$ repositories  =  [] ;
 foreach  ( $ page -> querySelectorAll ( '.wb-break-all' )  as  $ element )  { 
    $ repositories []  =  trim ( $ element -> querySelectorEval ( 'a' ,
        \Nesk\Rialto\Data\JsFunction :: createWithParameters ([ 'element' ]) -> body ( 'return element.innerHTML' ) 
    )) ;
 } 
$ browser -> close () ;
 var_dump ( $ repositories ) ;

 #note
 #https://kojirooooocks.hatenablog.com/entry/2020/09/30/100000