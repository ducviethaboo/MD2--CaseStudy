<?php
include_once "../controller/ProductController.php";
$db = new ProductController();
$newProduct = $db->addProductByAdmin();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm vào kho hàng</title>
    <link rel="stylesheet" href="../../css/formadd-css.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        font-family: "Lato", sans-serif
    }
</style>
<body background="../../img/background/admin.jpg">
<div class="container">
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
               href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                        class="fa fa-bars"></i></a>
            <a href="admin-page.php" class="w3-bar-item w3-button w3-padding-large">Quản lý bán hàng</a>
            <a href="showproductbyadmin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Danh sách sản
                phẩm</a>
            <a href="customerlist.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Danh sách khách hàng</a>
            <a href="addproductbyadmin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Thêm sản phẩm</a>
            <div class="w3-dropdown-hover w3-hide-small">
            </div>
            <a href="../../index.php" class="w3-btn w3-hover-grey w3-hide-small w3-right"><i></i>Đăng xuất</a>
        </div>
    </div>
</div>
<h3>Using CSS to style an HTML Form</h3>
<div class="form">
    <form method="post">
        <h3 style="text-align: center">Thêm sản phẩm vào kho hàng</h3>
        <label for="fname">Tên sản phẩm</label>
        <input type="text" id="fname" name="productname" ">

        <label for="lname">Loại sản phẩm</label>
        <input type="text" id="lname" name="producttype">

        <label for="country">Hãng sản phẩm</label>
        <input type="text" id="lname" name="productcompany">

        <label for="country">Mô tả sản phẩm</label>
        <input type="text" id="lname" name="productdesc">

        <label for="country">Ảnh</label>
        <br>
        <br>
        <input type="file" id="lname" name="productimg">
        <br>
        <br>
        <label for="country">Giá sản phẩm</label>
        <input type="text" id="lname" name="buyprice">

        <input type="submit" value="Thêm sản phẩm ">
    </form>
</div>
</body>
</html>

