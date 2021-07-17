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
                <div class="col-lg-1">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">TRANG CHỦ</a></li>
                                <li><a href="./categories.php">THỂ LOẠI <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="tl-haihuoc.php">Hài Hước</a></li>
                                        <li><a href="tl-hanhdong.php">Hành Động</a></li>
                                        <li><a href="tl-shounen.php">Shounen</a></li>
                                        <li><a href="tl-isekai.php">Isekai</a></li>
                                        <li><a href="tl-harem.php">Harem</a></li>
                                        <li><a href="tl-giatuong.php">Giả Tưởng</a></li>
                                    </ul>
                                </li>
                                <li><a href="theongay.php">TOP ANIME <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="theongay.php">Theo Ngày</a></li>
                                        <li><a href="theothang.php">Theo Tháng</a></li>
                                        <li><a href="theonam.php">Theo Năm</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">LỊCH CHIẾU</a></li>
                                <li><a href="#">LIÊN HỆ</a></li>
                                <li><a href="#">BLOG</a></li>
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
    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from anime where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <a href="./categories.php">GIỚI THIỆU PHIM</a>
                        <span><?php echo $row['tenanime'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
                    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from anime where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?php echo $row['anh'];?>">
                            <div class="comment"><i class="fa fa-comments"></i> <?php echo $row['sotap'];?></div>
                            <div class="view"><i class="fa fa-eye"></i> <?php echo $row['luotxem'];?></div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?php echo $row['tenanime'];?></h3>
                                <span>フェイト／ステイナイト, Feito／sutei naito</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p><?php echo $row['mota'];?></p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Trạng Thái:</span> <?php echo $row['trangthai'];?></li>
                                            <li><span>Thể Loại:</span> <?php echo $row['danhmuc'];?></li>
                                            <li><span>Năm PH:</span> <?php echo $row['namphathanh'];?></li>
                                            <li><span>Season:</span> Mùa hạ 2021</li>
                                            <li><span>Lượt Xem:</span> <?php echo $row['luotxem'];?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Thời Lượng:</span> 24 min/ep</li>
                                            <li><span>Chất Lượng:</span> HD</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"> Trailer</a>
                                <a href="anime-watching.php?id=<?php echo $row['id']; ?>" class="watch-btn"><span>Xem Ngay</span> <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>BÌNH LUẬN</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Aaa"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> GỬI</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="anime__details__sidebar">
                            <div class="section-title">
                                <h5>CÓ THỂ BẠN SẼ THÍCH</h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-1.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-2.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-3.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-4.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->

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