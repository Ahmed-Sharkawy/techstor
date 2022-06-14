<?php

//  puth  & urls

use TechStore\Classes\Request;
use TechStore\Classes\Session;

define("URL", "http://localhost/techstor/");

// db credentials
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techstor");

// include classes
require_once("vendor/autoload.php");

// objects
$request = new Request();
$session = new Session();