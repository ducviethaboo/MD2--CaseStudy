<?php
include_once "../controller/AccountController.php";
$account = new AccountController();
$account->checkLogin();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=password]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }
    </style>
</head>
<body style="background-color: lightgrey">
<div class="wrapper fadeInDown">
    <form id="formContent" method="post">
        <div class="fadeIn first">
            <br>
            <img style="width: 35%" src="../../img/login-logo/shoe.jpg" id="icon" alt="User Icon"/>
        </div>
        <br>
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="Tài khoản">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mật khẩu">
        <br>
        <br>
        <input type="submit" class="fadeIn fourth" value="Đăng nhập">
        <div id="formFooter">
            <p>Bạn không phải admin?</p>
            <a class="underlineHover" href="../../index.php"> Quay lại trang chủ</a>
        </div>
    </form>
</div>
</body>
</html>