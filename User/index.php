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
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css"/>

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
<style>
.columncard {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

.cardcard {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.containercard {
  padding: 0 16px;
}

.containercard::after, .rowcard::after {
  content: "";
  clear: both;
  display: table;
}

.titlecard {
  color: grey;
}

.buttoncard {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.buttoncard:hover {
  background-color: #555;
}
.container {
  position: relative;
  font-family: Arial;
}
.containerso {
  position: relative;
  font-family: Arial;
}
.text-block {
  position: absolute;
  top: 5px;
  left: 5px;
  background-color: red;
  padding-left: 5px;
  padding-right: 5px;
}
#slideshow {
  overflow: hidden;
  height: 700px;
  width: 1200px;
  margin: 0 auto;
}

.slide-wrapper {
  width: 4800px;
  -webkit-animation: slide 25s ease infinite;
}

.slide {
  float: left;
  height: 400px;
  width: 1200px;
}


@-webkit-keyframes slide {
  10% {margin-left: 0px;}
  20% {margin-left: -1200px;}
  30% {margin-left: -1200px;}
  40% {margin-left: -2400px;}
  50% {margin-left: -2400px;}
  
  
}
.tittle h2 {
    color: white;
    font-size: 42px;
    font-family: "Oswald", sans-serif;
    font-weight: 1700px;
    line-height: 52px;
    margin-top: 35px;
    margin-bottom: 8px;
    position: relative;
    top: -160px;  
}
.tittle p{
    color: #ffffff;
    font-size: 16px;
    margin-bottom: 40px;
    position: relative;
    top: -150px;
}
.col-lg-3 h2 {
    color: #ffffff;
}
.col-lg-6 h2 {
    color: #ffffff;
    text-align: center;
}
.footer-col{
    float: left;
    margin-left: 20px;
    padding-left: 135px;
    height: 123px;
}
.widget-title .title {
    float: left;
    margin-left: 80px;
    color:white;
    font-size: 13px;
    font-weight: bold;
    position: relative;
    margin-top: 100px;
    padding: 10px 20px;
    text-transform: uppercase;
    border: 1px solid #1B1B1B;
    border-radius: 7px;

}


</style>

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
                                        <li><a href="tl-hanhdong.php">Hàng Động</a></li>
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
                                <li><a href="blog.php">BLOG</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.php"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <br>
    <br>
    <br>
    <!-- Hero Section Begin -->
    <section class="slideshow-nab">
       <div id="slideshow">
  <div class="slide-wrapper">
      <div class="slide"><img src="image/anime/5.jpg">
          <div class='tittle' >
              <strong><h2>Bleach : The War </h2></strong>
              <p> Kể về những cuộc phiêu lưu của Kurosaki Ichigo 
                  sau khi anh có được những sức mạnh của "Shinigami"(死神, Tử thần)</p>
              
          </div>
      </div>
      <div class="slide"><img src="image/anime/8.jpg">
          <div class='tittle'>
              <strong><h2> Fate/Stay Night: Unlimited Blade Works </h2></strong>
              <p>Có nội dung chính xoay quanh Cuộc Chiến Chén Thánh – Một trận quyết đấu sinh tử giữa 7 vị Masters (Pháp sư) cùng 7 Servants (Anh linh trong lịch sử được triệu hồi bởi Chén Thánh)</p>
              
          </div>
      </div>
      <div class="slide"><img src="image/anime/7.png">
          <div class='tittle'>
             <strong><h2>MOBILE SUIT GUNDAM : IRON-BLOODED ORPHANS </h2></strong>
              <p> Bộ anime lấy bối cảnh 300 năm sau một cuộc xung đột lớn giữa Trái Đất và Sao Hỏa được biết đến với tên gọi Thảm họa Đại chiến (Calamity War).</p>
      
      </div
  </div>
</div>
    </section>
 <div class="col-xs-12 col-sm-12 col-md-6">

 </div>

    <!-- Product Section Begin -->
    <br>
    <br>
    <br>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h4>ANIME MỚI</h4>
                    </div>
                    <?php
                        require_once("Connection.php");
                        $query=mysqli_query($conn,"select * from anime");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                    
                        <div class="columncard">
                          <div class="cardcard">
                            <div class="containercard">
                            <div class="containerso">
                                <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh'];?>" alt="Jane" style="width:100%"></a>
                                <div class="text-block">
                                    <h5><?php echo $row['sotap'];?></h5>
                                </div>
                            </div>
                              <p style="color:white;padding-top:5px;"><?php echo $row['tenindex'];?></p>
                            </div>
                          </div>
                        </div>

                        <?php
                            }
                        ?>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <?php require_once("Connection.php"); ?>
                    <?php
                        $sql = "select * from anime where id='6'";
                        $query = mysqli_query($conn, $sql);
                    ?>
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>LƯỢT XEM NHIỀU NHẤT</h5>
                            </div>
                            <?php   
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Ngày</li>
                                <li data-filter=".month">Tháng</li>
                                <li data-filter=".years">Năm</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="<?php echo $data['anh']; ?>">
                                <div class="ep"><?php echo $data['sotap']; ?></div>
                                <div class="view"><i class="fa fa-eye"></i><?php echo $data['luotxem']; ?></div>
                                <h5><a href="#"><?php echo $data['tenanime']; ?></a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="<?php echo $data['anh']; ?>">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#"><?php echo $data['tenanime']; ?></a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/sidebar/tv-3.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/sidebar/tv-4.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/sidebar/tv-5.jpg">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>
        </div>
                            <?php 
                            }
                        ?>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-1.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-2.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-3.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-4.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Monogatari Series: Second Season</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

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