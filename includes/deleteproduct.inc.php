<?php 

  class DeleteProduct extends HttpReq {

    public function deleteProducts() {
      $data = $this->postReq();

      foreach ($data as $sku) {
        $sql = "DELETE FROM products WHERE sku = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$sku]);
      }
    }

  }