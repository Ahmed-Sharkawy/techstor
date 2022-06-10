<?php

namespace TechStore\Classes;

class Cart
{
  public function add(string $id, array $data)
  {
    $_SESSION['cart'][$id] = $data;
  }

  public function count()
  {
    return count($_SESSION['cart']);
  }

  public function total()
  {
    $total = 0;
    foreach($_SESSION['cart'] as $prodData){
      $total += $prodData['qty'] * $prodData['price'];
    }

    return $total;
  }

  public function has($id) : bool
  {
    return array_key_exists($id, $_SESSION['cart']);
  }

  public function all()
  {
    return $_SESSION['cart'];
  }

  public function remove($id)
  {
    unset($_SESSION['cart'][$id]);
  }

  public function emotySession()
  {
    $_SESSION['cart'] = [];
  }

}