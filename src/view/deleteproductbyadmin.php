<?php
include_once "../controller/ProductController.php";
$db = new ProductController();
$delete = $db->deleteProductByAdmin();
?>