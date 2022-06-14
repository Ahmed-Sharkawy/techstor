<?php

namespace TechStore\Classes\Models;

use TechStore\Classes\Db;
use TechStore\Classes\Session;

class Admin extends Db
{

  public function __construct()
  {
    $this->table = "admins";
    $this->connect();
  }

  public function login(string $email, string $password, Session $session)
  {
    $sql    = "SELECT * FROM $this->table WHERE email = '$email' LIMIT 1";
    $result = $this->coon->query($sql);
    $admin   = $result->fetch_assoc();


    if (! empty($admin)) {
      $isSame = password_verify($password, $admin['password']);

      if ($isSame) {
        $session->set("adminId", $admin['id']);
        $session->set("adminName", $admin['name']);
        $session->set("adminEmail", $admin['email']);
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function logout(Session $session)
  {
    $session->remove("adminId");
    $session->remove("adminName");
    $session->remove("adminEmail");
  }
}
