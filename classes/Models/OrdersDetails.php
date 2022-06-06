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
}
