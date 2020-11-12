<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/index-css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background: lightgrey" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Việt Hà Store - Authentic Adidas & Nike</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a style="font-size: 15px" href="index.php">Trang chủ</a></li>
                <li><a style="font-size: 15px" href="src/view/adidaslist.php" title="Sản phẩm Adidas">Adidas</a></li>
                <li><a style="font-size: 15px" href="src/view/nikelist.php" title="Sản phẩm Nike">Nike</a></li>
                <li class="dropdown">
                    <a style="font-size: 12px" class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="src/view/admin-login.php">Đăng nhập</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/index-img/slide2.jpg">
        </div>

        <div class="item">
            <img src="img/index-img/das1.png" width="1200" height="700">

        </div>
        <div class="item">
            <img src="img/index-img/das2.png" width="1200" height="700">
        </div>

        <div class="item">
            <img src="img/index-img/das3.png" width="100%" height="100%">
        </div>

        <div class="item">
            <img src="img/index-img/das4.png" width="1200" height="700">
        </div>

        <div class="item">
            <img src="img/index-img/das5.png" width="1200" height="700">
        </div>

        <div class="item">
            <img src="img/index-img/nike1.png" width="1200" height="700">
        </div>

        <div class="item">
            <img src="img/index-img/nike2.png" width="1200" height="700">
        </div>

        <div class="item">
            <img src="img/index-img/nike3.png" width="1200" height="700">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="band" class="container text-center">
    <h3><img src="img/index-img/logo-das.png" style="width: 320px"></h3>
    <p><em><h2>Impossible Is Nothing</h2></em></p>
    <br>
    <p>Tiền thân của Adidas là công ty Gebruder Dassler Schuhfabrik thành lập năm 1924 bởi hai anh em Adolf Dassler và
        Rudolf Dassler. Danh tiếng của anh em nhà Dassler phất lên nhờ hợp đồng tài trợ với Jesse Owens, vận động viên
        điền kinh người Mỹ gốc Phi, ở Olympic 1936. Năm đó Owens đã giành được 4 huy chương vàng Olympic. Tên tuổi của
        anh em nhà Dassler nhờ vậy lên như diều gặp gió. Trong khoảng thời gian trước thế chiến thứ hai, số lượng giày
        bán ra của hai em luôn vượt qua mốc 200.000 đôi mỗi năm.
        Khi chiến tranh thế giới thứ hai bắt đâu, do nhiều bất đồng, hai anh em nhà Dassler tách riêng năm 1947. Năm
        1948, Rudoft rẽ ngang và lập nên Ruda, sau này đổi tên thành Puma còn Adoft xây dựng nên Adidas từ năm 1949. Cả
        hai công ty hoạt động độc lập và trở thành đối thủ của nhau từ đó.
    </p>
</div>
<div id="band" class="container text-center">
    <h3><img src="img/index-img/logo-nike.png" style="width: 250px"></h3>
    <p><em><h2>Just Do It !</h2></em></p>
    <br>
    <p>Bắt nguồn từ đam mê chạy bộ của những người sáng lập là cựu HLV điền kinh Bill Bowerman và học trò Phil Knight,
        nên không hề khó hiểu khi thương hiệu Nike được biết đến nhiều nhờ những ưu điểm kĩ thuật để hỗ trợ cho việc vận
        động. Có thể thấy niềm đam mê của Nike đối với thể thao qua phong cách đặc trưng mà hãng hướng đến đó là sự táo
        bạo, ham muốn chinh phục và quyết tâm trong thi đấu. Đến nay, Nike không chỉ được biết đến như là một thương
        hiệu giày thành công, mà còn được ví như một đại diện của văn hóa và phong cách Mỹ.

    </p>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per
                                person</label>
                            <input type="number" class="form-control" id="psw" placeholder="How many?">
                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-block">Pay
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>
                    <p>Need <a href="#">help?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="container">
    <h3 style="font-family: 'Times New Roman'; font-size: 30px" class="text-center">Phản hồi</h3>
    <p style="font-size: 18px" class="text-center"><em>Hãy gửi phản hồi tới chúng tôi nếu bạn cảm thấy chưa hài lòng về dịch vụ.</em></p>
    <div class="row">
        <div class="col-md-4">
            <p><span class="glyphicon glyphicon-map-marker"></span> CS1: 36B Thanh Yên, Hoàn Kiếm, Hà Nội</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> CS2: 89 Bồ Đề, Long Biên, Hà Nội</p>
            <p><span class="glyphicon glyphicon-phone"></span> Điện thoại: 039 64 000 87</p>
            <p><span class="glyphicon glyphicon-phone"></span> Điện thoại: 038 78 000 02</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Email: ducviet300397@gmail.com</p>
            <p><span class="glyphicon glyphicon-envelope"></span> Email: nguyen.ha25698@gmail.com</p>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <br>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit"><a style="color: white" href="src/view/feedback.php">Gửi</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Tới đầu trang">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Việt Hà Store - Chuyên sản phẩm Adidas & Nike chính hãng
        </p>
    </footer>
</div>
</body>
<script src="js/index-js.js"></script>
</html>