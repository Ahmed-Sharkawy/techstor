<?php

use TechStore\Classes\Validation\Validator;

require_once( "app.php");

// use TechStore\Classes\Validation\Validator;


// require_once( "classes/Request.php");
// require_once("classes/Session.php");
// require_once("classes/Db.php");
// require_once("classes/Models/Product.php");
// require_once("classes/Models/Order.php");
// require_once("classes/Validation/ValidationRule.php");
// require_once("classes/Validation/Required.php");
// require_once("classes/Validation/Numeric.php");
// require_once("classes/Validation/Email.php");
// require_once("classes/Validation/Max.php");
// require_once("classes/Validation/Validator.php");



// $db = new Order;
// $res = $db->delete(1);
// echo'<pre>';
// print_r($res);

// $session = new Session();

// $session->set("name","Ahmed Maher Al Sharkawy");
// echo $session->get( "name");
// echo "<br>";
// echo $session->has("name");

// $db = new Product;
// $res = $db->getCount();
// // echo $res;
// echo '<pre>';
// print_r($res);


// $validator = new Validator;
// $validator->validate("age", 22 ,["required", "numeric"]);
// echo '<pre>';
// print_r($validator->getErrors());
// echo '</pre>';

echo $request->get("n");