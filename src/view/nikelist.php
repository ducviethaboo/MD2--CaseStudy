<?php
include_once "../controller/ProductController.php";
$db = new ProductController();
$type = "'Nike'";
$list = $db->showProduct($type);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/menu-css.css">
    <link rel="stylesheet" href="../../css/test.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Danh sách sản phẩm Nike</title>
</head>
<body background="../../img/background/nike-background.jpg">
<div class="topnav">
    <a style="color: white;width: 100px" class="active">
        <img style="width: 70%" src="../../img/login-logo/logo-nike.png"></a>
    <a class="btn active" href="../../index.php">Trang chủ</a>
    <a class="btn" href="../view/adidaslist.php">Adidas</a>
</div>
<div class="container">
    <h3 class="h3">    </h3>
    <div class="row">
        <?php foreach ($list as $key=>$value): ?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="../../img/product-img/<?php echo $value['productImg']?>">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a class="btn" href="../view/productdetail.php?id=<?php echo $value['productId']?>"><?php echo $value['productName']?></a></h3>
                    <div class="price"> <?php echo number_format($value['buyPrice'],0, '.' , ',' ) . '  '. '₫' ?>
                    </div>
                    <a style="font-size: 20px" class="btn add-to-cart" href="../view/productdetail.php?id=<?php echo $value['productId']?>">Chi tiết</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<hr>
</body>
</html>