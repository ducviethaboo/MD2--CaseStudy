<?php
include_once "../../src/controller/ProductController.php";
include_once "../../src/model/OrderDeltail.php";
$connect = new ProductController();
$id = $connect->addCustomer();
$product = $connect->showProductById();
$product['productId'];
$id['orderId'];
if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
    $orderdetails = new OrderDeltail($quantity, $product['productId'], $id['orderId']);
    $connect->addOrderdetails($orderdetails);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm khách hàng</title>
    <link rel="stylesheet" href="../../css/formadd-css.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
<body style="background-color: lightgrey">
<br>
<br>
<br>
<div class="form">
    <form method="post">
        <h3 style="text-align: center">Nhập thông tin khách hàng</h3>
        <label for="fname">Tên khách hàng</label>
        <input type="text" id="fname" name="customername">

        <label for="lname">Số điện thoại</label>
        <input type="text" id="lname" name="customerphone"">

        <label for="country">Địa chỉ</label>
        <input type="text" id="lname" name="customeraddress"">

        <label for="country">Email</label>
        <input type="text" id="lname" name="customeremail">

        <label for="country">Số lượng sản phẩm</label>
        <input type="text" id="lname" name="quantity"">

        <input onclick="return confirm('Cảm ơn quý khách đã mua hàng của chúng tôi!')" type="submit"
               value="Xác nhận mua hàng">
        <button><a href="cartprocess.php">Huỷ</a></button>
        <a href="../../index.php">Quay lại trang chủ</a>

    </form>
</div>
</body>
</html>