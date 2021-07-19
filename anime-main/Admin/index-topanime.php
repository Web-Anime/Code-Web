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
                    <h3 align="center" style="color:white;">DANH SÁCH TOP ANIME THEO NGÀY</h3>
                    <table border="1" align="center" cellspacing="0" cellpadding="0" witch="850px" style="color:black; background-color:white;">
                        <tr>
                            <td colspan="8" align="center"><button class="btn danger" type="button" onclick="myFunction()">THÊM MỚI</button></td>  
                        </tr>
                        <tr>
                            <th align="center">ID</th>
                            <th align="center">ẢNH</th>
                            <th align="center">TÊN ANIME</th>
                            <th align="center">MÔ TẢ</th>
                            <th align="center">LƯỢT XEM</th> 
                            <th align="center">TÁC VỤ</th>
                        </tr>
                    <?php 
                    $conn = mysqli_connect("localhost", "root", "", "anime");
                    $sql = "SELECT * FROM topngay";
                    $result = mysqli_query($conn ,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row["id"];
                        $anh = $row["anh"];
                        $tenanime = $row["tenanime"];
                        $mota = $row["mota"];
                        $luotxem = $row["luotxem"];
                    ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $anh?></td>
                            <td><?php echo $tenanime ?></td>
                            <td><?php echo $mota ?></td>
                            <td><?php echo $luotxem ?></td>
                            <td>

                                <a href="xulyxoa-topanime.php?id=<?php echo $id; ?>">XÓA</a>
                                <a href="suadulieu-topanime.php?id=<?php echo $id; ?>">SỬA</a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                        <?php 
                        mysqli_close($conn); ?>
                    </table>
                    
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
<script>
    function myFunction(){
        location.replace("themdulieu-topanime.php");
    }
</script>
