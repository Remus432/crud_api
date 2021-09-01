<?php
class ViewProduct extends Product {
  
  public function showAllProducts() {
    $datas = $this->getAllProducts();
    return json_encode($datas, true);
  }
}