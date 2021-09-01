<?php

include_once "./includes/dbh.inc.php";
include_once "./includes/httpreq.inc.php";
include_once "./includes/deleteproduct.inc.php";

$delete = new DeleteProduct();
$delete->deleteProducts();