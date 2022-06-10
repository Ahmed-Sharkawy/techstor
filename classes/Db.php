<?php

namespace TechStore\Classes;

use mysqli;

abstract class Db
{
  protected $coon;
  protected $table;

  public function connect()
  {
    $this->coon = new \mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
  }

  public function selectAll(string $fields = "*"): array
  {
    $sql    = "SELECT $fields FROM `$this->table` ";
    $result = $this->coon->query($sql);
    return $result->fetch_all(1);
  }

  public function selectId($id, string $fields = "*")
  {
    $sql    = "SELECT $fields FROM `$this->table` WHERE `id` = '$id'";
    $result = $this->coon->query($sql);
    return $result->fetch_assoc();
  }

  public function selectWhere($conds, string $fields = "*")
  {
    $sql    = "SELECT $fields FROM `$this->table` WHERE $conds";
    $result = $this->coon->query($sql);
    return $result->fetch_all(1);
  }

  public function getCount(): int
  {
    $sql    = "SELECT COUNT(*) AS cnt FROM `$this->table` ";
    $result = $this->coon->query($sql);
    return $result->fetch_assoc()["cnt"];
  }

  public function insert(string $fields, string $value)
  {
    $sql = "INSERT INTO $this->table ($fields) VALUES ($value)";
    return $this->coon->query($sql);
  }

  public function insertAndGetId(string $fields, string $value)
  {
    $sql = "INSERT INTO $this->table ($fields) VALUES ($value)";
    $this->coon->query($sql);
    return $this->coon->insert_id;
  }

  public function update(string $set, $id): bool
  {
    $sql = "UPDATE `$this->table` SET $set WHERE `id` = $id";
    return $this->coon->query($sql);
  }

  public function delete($id): bool
  {
    $sql = "DELETE FROM $this->table WHERE `id` = $id";
    return $this->coon->query($sql);
  }
}
