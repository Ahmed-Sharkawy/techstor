<?php
ob_start();
use TechStore\Classes\Models\Product;

require_once "../../app.php";

if ($request->getHas("id")) {

  $id = $request->get("id");

  $productObject = new Product;
  $imgName = $productObject->selectId($id,"img")["img"];

  $productObject->delete($id);
  unlink("../../upload/$imgName");


  $session->set("success", "Product deleted SeccessFliy");
  $request->aredirect("product.php");
}

ob_end_flush();