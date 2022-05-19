<?php

/*
*
* Load Config File
*
*/
require_once '../config/config.php';
/*
*
* Load Autoload File
*
*/
require_once '../app/lib/Autoload.php';
/*
*
*  Authentification
*
*/

$template = new APP\LIB\Template();
$auth     = new APP\LIB\Auth();

/*
*
* Call The Front Controller
*
*/

$c = new APP\LIB\FrontController($auth,$template);