<?php

//  puth  & urls

define("PATH", __DIR__ . '\\');
define("URL", "http://localhost/techstor/");

// db credentials
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "ROOT");
define("DB_PASSWORD", "");
define("DB_NAME", "localhost");

// include classes
require_once(PATH . "classes/Request.php");
require_once(PATH . "classes/Session.php");
require_once(PATH . "classes/Db.php");
require_once(PATH . "classes/Models/Cat.php");
require_once(PATH . "classes/Models/Order.php");
require_once(PATH . "classes/Models/OrdersDetails.php");
require_once(PATH . "classes/Models/Product.php");
require_once(PATH . "classes/Validation/ValidationRule.php");
require_once(PATH . "classes/Validation/Required.php");
require_once(PATH . "classes/Validation/Numeric.php");
require_once(PATH . "classes/Validation/Email.php");
require_once(PATH . "classes/Validation/Str.php");
require_once(PATH . "classes/Validation/Max.php");
require_once(PATH . "classes/Validation/Validator.php");

// objects
$request = new Request();
$session = new Session();