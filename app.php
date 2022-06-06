<?php

//  puth  & urls

use TechStore\Classes\Request;
use TechStore\Classes\Session;

define("PATH", __DIR__ . '\\');
define("URL", "http://localhost/techstor/");

// db credentials
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techstor");

// include classes
require_once(PATH . "vendor/autoload.php");

// objects
$request = new Request();
$session = new Session();