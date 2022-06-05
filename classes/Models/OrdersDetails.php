<?php

class OrdersDetails extends Db
{
  public function __construct()
  {
    $this->table = "orders_details";
    $this->connect();
  }
}
