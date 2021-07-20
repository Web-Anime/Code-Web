<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ADMIN ANIME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
.body {
  font-family: Arial, Helvetica, sans-serif;
}
.row {  
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
.side {
  -ms-flex: 10%;
  flex: 10%;
}
.main {   
  -ms-flex: 80%;
  flex: 80%;
  padding: 20px;
}
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
/*---------------------------------------------------------------------------- */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}
.sidenav a, .dropdown-btn {
  padding: 20px 25px 20px 25px;
  text-decoration: none;
  font-size: 16px;
  font-weight: 700;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.sidenav a:hover, .dropdown-btn:hover {
  color: yellow;
}
.active {
  background-color: green;
  color: white;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
/* --------------------------------------------------------------------------- */
.rowadd {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
.col-50 {
  -ms-flex: 40%;
  flex: 40%;
}
.col-75 {
  -ms-flex: 40%;
  flex: 40%;
}
.col-50,
.col-75 {
  padding: 0 16px;
}
.containeradd {
  padding: 5px 40px 25px 30px;
  border-radius: 10px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
}
label {
  margin-bottom: 10px;
  display: block;
  color:white;
  font-weight: 600;
}
.btn {
  background-color: #000080;
  color: white;
  padding: 12px;
  border: none;
  width: 100%;
  border-radius: 10px;
  cursor: pointer;
  font-size: 20px;
  font-weight: 700;
}
.btn:hover {
  background-color: yellow;
  color:black;
}
a {
  color: #2196F3;
}
hr {
  border: 1px solid lightgrey;
}
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header End -->

    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <div class="row">
                <div class="side">
                    <div class="sidenav">
                        <img src="https://cdn.tgdd.vn//GameApp/-1//o1-800x450.jpg" style="width:100%">
                        <a href="Index-anime.php">ANIME</a>
                        <button class="dropdown-btn">TOP ANIME 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                          <a href="#">THEO NGÀY</a>
                          <a href="#">THEO THÁNG</a>
                          <a href="#">THEO NĂM</a>
                        </div>
                        <a href="index-lichchieu.php">LỊCH CHIẾU</a>
                        <a href="index-lienhe.php">LIÊN HỆ</a>
                        <a href="index-blog.php">BLOG</a>
                        <a href="index-nguoidung.php">NGƯỜI DÙNG</a>
                    </div>
                </div>
                <div class="main">
                    <div class="rowadd">
                        <div class="col-75">
                            <div class="containeradd">
                                <?php 
                                $conn = mysqli_connect("localhost", "root", "", "anime");
                                $id = $_GET["id"];
                                $sql = "SELECT * FROM blog WHERE id = '$id'";
                                $result = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $id = $row["id"];
                                    $anh = $row["anh"];
                                    $tenblog = $row["tenblog"];
                                    $mota = $row["mota"];
                                    $motaindex = $row["motaindex"];
                                    $loaiblog = $row["loaiblog"];
                                    $ngaydang = $row["ngaydang"];
                                }
                                ?>
                                <form action="xulysua-blog.php" method="post">
                                    <h3 style="text-align:center;color:white;font-weight:700;margin-bottom:10px;">SỬA BLOG</h3>
                                    <div class="rowadd">
                                        <div class="col-50">
                                            <label><i class="fa fa-user"></i> ID</label>
                                                <input type="text" name="txt_id" value= "<?php echo $id ?>">
                                            <label><i class="fa fa-bars"></i> ẢNH</label>
                                                <input type="text" name="txt_anh" value= "<?php echo $anh ?>">
                                            <label><i class="fa fa-address-card-o"></i> TÊN BLOG</label>
                                                <input type="text" name="txt_tenblog" value= "<?php echo $tenblog ?>">
                                            <label><i class="fa fa-file"></i> MÔ TẢ</label>
                                                <input type="text" name="txt_mota" value= "<?php echo $mota ?>">
                                            <label><i class="fa fa-file"></i> MÔ TẢ INDEX</label>
                                                <input type="text" name="txt_motaindex" value= "<?php echo $motaindex ?>">
                                            <label><i class="fa fa-file"></i> LOẠI BLOG</label>
                                                <input type="text" name="txt_loaiblog" value= "<?php echo $loaiblog ?>">
                                            <label><i class="fa fa-file"></i> NGÀY ĐĂNG</label>
                                                <input type="text" name="txt_ngaydang" value= "<?php echo $ngaydang ?>">
                                        </div>
                                    </div>
                                    <input type="submit" value="SỬA" name="btnSave" class="btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>