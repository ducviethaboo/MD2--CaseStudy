<?php
include_once "../controller/ProductController.php";
$con = new ProductController();
$customer = $con->showAllCustomer();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="../../css/table-css.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        font-family: "Lato", sans-serif
    }
</style>
<body>
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

<h2>Danh sách khách hàng đã mua sản phẩm</h2>
<table border="1px"
       style="text-align: center; background-color: lightgrey; position: absolute;top: 70px; left: 140px"
       cellspacing="0">
    <th>STT</th>
    <th>Tên khách hàng</th>
    <th>Tên sản phẩm</th>
    <th>Hãng sản phẩm</th>
    <th>Số điện thoại</th>
    <th>Ngày mua</th>
    <th>Mã số đơn hàng</th>
    <th>Số lượng</th>
    <th>Giá</th>
    <th>Tổng tiền</th>
    <?php foreach ($customer as $key=>$value): ?>
    <tr>
        <td> <?php echo $key+1 ?></td>
        <td> <?php echo $value['customerName']?></td>
        <td> <?php echo $value['productName']?></td>
        <td> <?php echo $value['productType']?></td>
        <td> <?php echo $value['customerPhone']?></td>
        <td> <?php echo $value['orderDate']?></td>
        <td> <?php echo "OD-" . $value['orderId']?></td>
        <td> <?php echo $value['quantityOrder']?></td>
        <td> <?php echo number_format($value['buyPrice'],0,'.',',')?></td>
        <td> <?php echo number_format($value['total'],0,'.',',')?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
