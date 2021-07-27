<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="tl-isekai.php">Isekai</a></li>
                                        <li><a href="tl-harem.php">Harem</a></li>
                                        <li><a href="tl-giatuong.php">Giả Tưởng</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="../Login/Xulyloginform.php" method="POST" onsubmit="return validateLogin()">
                            <div class="input__item">
                                <input type="text" placeholder="Email address"name="username">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Password"name="password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn"name="btn_Login">Login Now</button>
                        </form>
                        <a href="#" class="forget_pass">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="#" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                    <h2>Liên hệ Admin</h2>
                    <br>
                    <p> Tổng hợp tất cả các bộ anime trên trang được tổng hợp từ Internet và re-up từ các Fansub.</p>
                    <p><i class="fab fa-facebook-square">FACEBOOK:</i> Tuan Anh </p>
                    <p><i class="fab fa-facebook-messenger">MESSENGER:</i> Huy Lee </p>
                    <p><i class="fas fa-envelope">EMAIL:</i> wibuteam@gmail.com  </p>

            </div>
            <div class="col-lg-6">
                <h2>Project Anime</h2>
                <br>
                <div class="footer-col">
                <p>Liên hệ công ty thiết kế</p>
                <p>Giám đốc kiêm trưởng dự án : Tuan Anh</p>
                <p>Hotline hỗ trợ quảng cáo: 0942 86 11 33</p>
                <p>Email: wibuhue@gmail.vn</p>
                <p>Address: Tp huế,tỉnh Thừa thiên Huế</p>
                </div>
            </div>
            <div class="col-lg-3">
                  <h2>Thông Tin</h2>
                  <BR>
                  <p>Xem tốt nhất t với màn hình độ phân giải 1280x720px trở lên và sử dụng trình duyệt Mozilla Firefox, Chrome & Cốc Cốc.</p>
                  <p>Bản quyền © 2021 Thiết kế bởi công ty WibuVN.Được quyền bảo lưu và đăng kí bản quyền</p>

              </div>
          </div>
         <div class="row">
             <div class="col-lg-3">
                 
             </div>
             <div class="col-lg-6">
                 <BR>
        <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="index.html">TRANG CHỦ</a></li>
                        <li><a href="categories.html">THỂ LOẠI</a></li>
                        <li><a href="theongay.html">TOP ANIME</a></li>
                        <li><a href="#">LIÊN HỆ</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                    </ul>
                </div>
             </div>
              <div class="col-lg-3">
        
              </div>
      </div>
  </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>