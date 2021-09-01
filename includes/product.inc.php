<?php
class Product extends Dbh {

  protected function getAllProducts() {
    $sql = "SELECT * FROM products";
    $statement = $this->connect()->query($sql);

    while ($row = $statement->fetchAll()) {
      if ($row > 0) {
        return $row;
      } else {
        $data = [];
        return $data;
      }
    }
  }
}