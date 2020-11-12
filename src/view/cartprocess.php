<?php
include_once "../../src/controller/ProductController.php";
session_start();
$product = new  ProductController();
$showproduct = $product->showProductById();
$id = $_GET['id'];
$item = [
    'id' => $_GET['id'],
    'productname' => $showproduct['productName'],
    'price' => $showproduct['buyPrice'],
    'desc' => $showproduct['productDesc'],
    'productimg' => $showproduct['productImg'],
    'quantity' => $_SESSION['cart'][$id]['quantity']
];
$_SESSION['cart'][$id] = $item;
if ($id === $_SESSION['cart'][$id]['id']) {
    $_SESSION['cart'][$id]['quantity'] += 1;
} else {
    $_SESSION['cart'][$id] = $item;
}

if (isset($_POST['delete'])) {
    session_destroy();
    header('location:../../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../../css/cart-css.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body style="background-color: lightgrey">
<form method="post">
    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
    <div class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Giỏ hàng
                <a href="" class="btn btn-outline-info btn-sm pull-right">Mua thêm sản phẩm</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                    <input type="hidden" name="productid" value="<?php echo $value['id'] ?>">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                            <img class="img-responsive" src="../../img/product-img/<?php echo $value['productimg'] ?>"
                                 alt="prewiew" width="120" height="120">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong> <?php echo $value['productname'] ?></strong></h4>
                            <h4>
                                <small><?php echo $value['desc'] ?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?php echo number_format($value['price'], 0, '.', ',') . '₫' ?> <span
                                                class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <!--                                <div style="text-align: center" class="quantity">-->
                                <input name="quantity" style="text-align: center;border: 0px" type="text"
                                       value="<?php echo $value['quantity'] ?>">
                                <!--                                </div>-->
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="pull-right">
                    <input style="background-color: #f44336" class="btn btn-success pull-right" type="submit"
                           name="delete" value="Xoá giỏ hàng">
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="addcustomer.php?id=<?php echo $value['id'] ?>" class="btn btn-success pull-right">Mua
                        hàng</a>
                    <div class="pull-right" style="margin: 5px">
                        Tổng tiền:
                        <b><?php echo number_format($value['quantity'] * $value['price'], 0, '.', ',') . '₫' ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
