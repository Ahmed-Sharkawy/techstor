<?php
require_once "../app.php";

use TechStore\Classes\Cart;
use TechStore\Classes\Models\Order;
use TechStore\Classes\Models\OrdersDetails;
use TechStore\Classes\Validation\Validator;


$cartObject = new Cart();
$orderObject = new Order();
$ordersDetailsObject = new OrdersDetails();


if ($request->postHas('submit') && $session->has("cart") == true) {

  $name     = $request->post('name');
  $email    = $request->post('email');
  $phone    = $request->post('phone');
  $address  = $request->post('address');

  $validator = new Validator();

  $validator->validate("name", $name, ["required", "str", "max"]);
  $validator->validate("phone", $phone, ["required", "str", "max"]);

  if (!empty($email)) {
    $validator->validate("email", $email, ["email", "max"]);
    $email  =  "'$email'";
  }else {
    $email = "null";
  }

  if (!empty($address)) {
    $validator->validate("address", $address, ["str", "max"]);
    $address  =  "'$address'";
  } else {
    $address = "null";
  }

  if ($validator->hasErrors()) {
    $session->set("errors", $validator->getErrors());
    $request->redirect("cart.php");
  } else {

    $orderId = $orderObject->insertAndGetId("name, email, phone, address", "'$name', $email, '$phone', $address");

    foreach ($cartObject->all() as $productId => $product) {
      $qty = $product['qty'];
      $ordersDetailsObject->insert("products_id, orders_id, qty", "'$productId', '$orderId', '$qty'");
    }

    $cartObject->emotySession();
    $request->redirect("index.php");
  }

} else {

  $request->redirect("cart.php");
}
