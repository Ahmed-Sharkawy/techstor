<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\Db;

class Product extends Db
{
  public function __construct()
  {
    $this->table = "products";
    $this->connect();
  }

  public function selectId($id, string $fields = "products.*")
  {
    $sql    = "SELECT $fields FROM `$this->table` JOIN cats ON $this->table.cats_id = cats.id WHERE products.id = '$id'";
    $result = $this->coon->query($sql);
    return  $result->fetch_assoc();
  }

}
