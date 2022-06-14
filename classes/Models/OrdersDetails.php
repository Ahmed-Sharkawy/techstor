<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\Db;

class OrdersDetails extends Db
{
  public function __construct()
  {
    $this->table = "orders_details";
    $this->connect();
  }

  public function selectAllProduct($orderId)
  {
    $sql    = "SELECT qty, name, price FROM $this->table JOIN products
    ON $this->table.products_id = products.id WHERE orders_id = '$orderId' ";
    $result = $this->coon->query($sql);
    return $result->fetch_all(1);
  }
}
