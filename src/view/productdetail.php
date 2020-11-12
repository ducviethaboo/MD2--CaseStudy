<?php
include_once "../controller/ProductController.php";
$db = new ProductController();
$product = $db->showProductById();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/adidaslist-css.css">
    <link rel="stylesheet" href="../../css/index-css.css">
</head>
<style>
    #a {
        background-color: black;
    }
</style>
<body background="../../img/background/backgrounddetail.jpeg">
<div>
    <div class="container">
        <div>
            <div class="head">
                <body style="background-color: lightgrey" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../../index.php">Việt Hà Store - Giày chính hãng các loại</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../../index.php">Trang chủ</a></li>
                                <li><a href="adidaslist.php">Adidas</a></li>
                                <li><a href="nikelist.php">Nike</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                </body>
            </div>
        </div>
        <form method="post">
        <div class="mid">
            <fieldset>
                <div style="background-color: white" class="card">
                    <img src="../../img/product-img/<?php echo $product['productImg'] ?>" style="width:100%">
                    <p><b><?php echo $product['productName'] ?></b></p>
                    <p class="price"><?php echo number_format($product['buyPrice'],0, '.' , ',' ) . '  '.  "₫" ?></p>
                    <p> <?php echo $product['productDesc'] ?> </p>
                    <p style="border-radius: 10px">
                        <a id="a" class="btn btn-primary" style="color: white;font-size: 20px; width: 300px" href="cartprocess.php?id=<?php echo $product['productId'] ?>">Mua
                                hàng</a>
                    </p>
                </div>
            </fieldset>
        </div>
        </form>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>

