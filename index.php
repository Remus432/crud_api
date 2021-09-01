<?php
 

  include_once "./includes/dbh.inc.php";
  include_once "./includes/httpreq.inc.php";
  include_once "./includes/product.inc.php";
  include_once "./includes/viewproduct.inc.php";
  include_once "./includes/deleteproduct.inc.php";

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
  header("Content-type:application/json");

 

  $products = new ViewProduct();
  echo $products->showAllProducts();

  
?>
