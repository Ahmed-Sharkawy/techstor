<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\Db;

class Order extends Db
{
  public function __construct()
  {
    $this->table = "orders";
    $this->connect();
  }

  public function selectAllWithOrder(string $fields = "*"): array
  {
    $sql    = "SELECT $fields FROM $this->table JOIN orders_details JOIN products
    ON $this->table.id = orders_details.orders_id
    AND orders_details.products_id = products.id GROUP BY $this->table.id";

    $result = $this->coon->query($sql);
    return $result->fetch_all(1);
  }

  public function selectIdWithOrder($id, string $fields = "*")
  {
    $sql    = "SELECT $fields FROM $this->table JOIN orders_details JOIN products
    ON $this->table.id = orders_details.orders_id
    AND orders_details.products_id = products.id
    WHERE $this->table.id = '$id'";

    $result = $this->coon->query($sql);
    return $result->fetch_assoc();
  }
}

?>