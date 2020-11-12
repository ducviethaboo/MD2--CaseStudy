<?php
include_once "../controller/ProductController.php";
$db = new ProductController();
$productlist = $db->showProductByAdmin();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách kho hàng</title>
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
            <a href="../../index.php" class="w3-btn w3-padding-large w3-hover-grey w3-hide-small w3-right"><i></i>Đăng xuất</a>
        </div>
    </div>
</div>
<div>
    <table border="1px"
           style="text-align: center; background-color: lightgrey; position: absolute;top: 70px; left: 35px"
           cellspacing="0">
        <tr>
            <th style="width: 50px">STT</th>
            <th style="width: 120px">Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th style="width: 160px">Loại sản phẩm</th>
            <th>Hãng</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th></th>
        </tr>
        <?php foreach ($productlist as $key => $item): ?>
            <tr>
                <td> <?php echo $key + 1 ?></td>
                <td> BH<?php echo $item['productId'] ?></td>
                <td> <?php echo $item['productName'] ?></td>
                <td style="width: 100px"> <?php echo $item['productType'] ?></td>
                <td style="width: 100px"> <?php echo $item['productCompany'] ?></td>
                <td> <?php echo $item['productDesc'] ?></td>
                <td style="width: 200px"><img style="width: 50%"
                                              src="../../img/product-img/<?php echo $item['productImg'] ?>"></td>
                <td> <?php echo number_format($item['buyPrice'],0,'.',',') ?></td>
                <td style="width: 200px">
                    <button id="edit"><a class="w3-btn" style="color: white" href="editproductbyadmin.php?id=<?php echo $item['productId'] ?>"><svg width="25" height="25" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg></a></button>
                    <button id="delete"><a class="w3-btn" style="color: white" href="deleteproductbyadmin.php?id=<?php echo $item['productId'] ?>"><svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></a></button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
