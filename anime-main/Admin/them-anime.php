<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>ADMIN ANIME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  padding-top: 10px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 10px;
}
.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}
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
                <div class="col-lg-12">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="Index-anime.php">ANIME</a></li>
                                <li><a href="index-topanime.php">TOP ANIME</a></li>
                                <li><a href="#">LỊCH CHIẾU</a></li>
                                <li><a href="#">LIÊN HỆ</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">TÀI KHOẢNG</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 align="center" style="color:white;">THÊM ANIME</h3>
                    <form action="xulythem-anime.php" method="post">
                    <table style="color:black; background-color:white;margin-left:36%;margin-top:10px;">
                        <tr>
                            <td>ID</td>
                            <td><input type="text" id="txt_id" name="txt_id" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>DANH MỤC</td>
                            <td><input type="text" id="txt_danhmuc" name="txt_danhmuc" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>ẢNH</td>
                            <td><input type="text" id="txt_anh" name="txt_anh" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>TÊN ANIME</td>
                            <td><input type="text" id="txt_tenanime" name="txt_tenanime" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>TÊN INDEX</td>
                            <td><input type="text" id="txt_tenindex" name="txt_tenindex" value="" size="30"></td>
                        </tr>

                        <tr>
                            <td>MÔ TẢ</td>
                            <td><input type="text" id="txt_mota" name="txt_mota" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>SỐ TẬP</td>
                            <td><input type="text" id="txt_sotap" name="txt_sotap" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>FILM</td>
                            <td><input type="text" id="txt_film" name="txt_film" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>TRẠNG THÁI</td>
                            <td><input type="text" id="txt_trangthai" name="txt_trangthai" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>NĂM PH</td>
                            <td><input type="text" id="txt_namphathanh" name="txt_namphathanh" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td>LƯỢT XEM</td>
                            <td><input type="text" id="txt_luotxem" name="txt_luotxem" value="" size="30"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" class="btn danger" id="btn" name="btnSave" value="THÊM">
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
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
<script src="js/main.js"></script>
</body>
</html>