<?php

include_once "./includes/dbh.inc.php";
include_once "./includes/httpreq.inc.php";

class AddProduct extends HttpReq {
  private $sku;
  private $name;
  private $price;
  private $type;
  private $property;

  public function insertProduct() {
    $data = $this->postReq();
    
    if (isset($data) && !empty($data)) {
      if (isset($data['sku'])) {

        $this->sku = $data['sku'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->type = $data['productType'];
        $this->property = $data['property'];

        $sql = "INSERT INTO products (sku, name, price, type, property) VALUES(?, ?, ?, ?, ?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$this->sku, $this->name, $this->price, $this->type, $this->property]);
      }
    }
    
  }
}

$addproduct = new AddProduct();
$addproduct->insertProduct();