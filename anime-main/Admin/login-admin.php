<?php session_start(); ?>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="../View/Client/WIBU.png">
    <title>Anime | Đăng Nhập Admin</title>
        <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/Public/css/all.min.css"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Public/css/style.css" type="text/css">
    <?php //include '../View/Client/Layout/Link.php'; ?>
    <?php if(!isset($_SESSION['admin']) && !isset($_SESSION['pass'])){ ?>
</head>
<body>
    <?php // include 'View/Client/Layout/Menu.php'; ?>
    <section class="normal-breadcrumb set-bg" data-setbg="#">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>ĐĂNG NHẬP ADMIN</h2>
                        <p>Chào mừng đến với Wibu Nerver Die</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Đăng nhập Admin</h3>
                        <form action="dangnhap-admin.php" method="POST" onsubmit="return validateLogin()">
                            <div class="input__item">
                                <input type="text" placeholder="Tài Khoản"name="admin">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Mật Khẩu"name="pass">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn"name="btn_Login">ĐĂNG NHẬP</button>
                            <a href="Index-anime.php">Quay lại</a>
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Chuyển đến trang Web của bạn ?</h3>
                        <a href="index-user.php" class="primary-btn">Anime Shop</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }else{
                           echo "<script>alert('Bạn Đã đăng nhập tài khoản rồi!');</script>";
                            require_once 'Index-anime.php';
                        }
                        ?>
    <?php// include 'View/Client/Layout/Footer.php'; ?>
    <?php include '../View/Client/Layout/Script.php'; ?>
</body>
</html>