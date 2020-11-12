<?php
include_once "../controller/ProductController.php";
$db = new ProductController();
$productlist = $db->showProductById();
$edit = $db->editProductByAdmin();
echo $edit;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa kho hàng</title>
    <link rel="stylesheet" href="../../css/formadd-css.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Doanh thu</a>
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
        <input type="hidden" name="productid" value="<?php echo $productlist['productId']?>">
        <h3 style="text-align: center">Cập nhật sản phẩm</h3>
        <label for="fname">Tên sản phẩm</label>
        <input type="text" id="fname" name="productname" value="<?php echo $productlist['productName'] ?>" >

        <label for="lname">Loại sản phẩm</label>
        <input type="text" id="lname" name="producttype" value="<?php echo $productlist['productType'] ?>">

        <label for="country">Hãng sản phẩm</label>
        <input type="text" id="lname" name="productcompany" value="<?php echo $productlist['productCompany'] ?>">

        <label for="country">Mô tả sản phẩm</label>
        <input type="text" id="lname" name="productdesc" value="<?php echo $productlist['productDesc'] ?>">

        <label for="country">Ảnh</label>
        <br>
        <img style="width: 40%;position: center" src="../../img/product-img/<?php echo $productlist['productImg'] ?>">
        <br>
        <input type="hidden" name="productImg" value="<?php echo $productlist['productImg'] ?>">
        <input type="file" id="lname" name="productimg">
        <br>
        <br>
        <label for="country">Giá sản phẩm</label>
        <input type="text" id="lname" name="buyprice" value="<?php echo $productlist['buyPrice'] ?>">

        <input type="submit" value="Cập nhật sản phẩm">
    </form>
</div>
</body>
</html>
