<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>ADMIN ANIME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 10%; /* IE10 */
  flex: 10%;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 80%; /* IE10 */
  flex: 80%;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}


/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
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

/* Style the sidenav links and the dropdown button */
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

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: yellow;
}
/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
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
  margin-bottom: 10px;
}
.btn:hover {
  background-color: yellow;
  color:black;
}
.btn-button {
  background-color: #000080;
  color: white;
  padding: 10px;
  width: 100%;
  border-radius: 10px;
  cursor: pointer;
  font-size: 13px;
  font-weight: 700;
}
.btn-button:hover {
  background-color: yellow;
  color:black;
}

.topnav {
  overflow: hidden;
}
/* --------------------------------------------------- */
.column1 {
  float: left;
  width: 70%;
  padding: 10px;
  height: auto;
}
.column2 {
  float: left;
  width: 30%;
  padding: 10px;
  height: auto;
}
.column3 {
  float: left;
  width: 100%;
  padding: 10px;
  height: auto;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid #000080;
  float: left;
  width: 80%;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px; 
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #000080;
  color: white;
  font-size: 17px;
  border: 1px solid #000080;
  border-left: none;
  cursor: pointer;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
            <div class="row">
                <div class="side">
                    <div class="sidenav">
                        <img src="https://cdn.tgdd.vn//GameApp/-1//o1-800x450.jpg" style="width:100%">
                        <a href="Index-anime.php"><i class="bi bi-house-door"></i>ANIME</a>
                        <button class="dropdown-btn">TOP ANIME 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                          <a href="index-topanime.php">THEO NGÀY</a>
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
                    <div class="row">
                        <div class="column1">
                            <h2 style="color: white;font-weight:700px;">DANH SÁCH ANIME</h2>
                        </div>
                        <div class="column2">
                            <form class="example" action="#" method="POST">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="column3">
                            <?php
                                $servername='localhost';$username='root';$password='';$dbname = "anime";
                                $conn=mysqli_connect($servername,$username,$password,$dbname);
                                if(!$conn){
                                die('Không thể kết nối Database:' .mysql_error());
                                }
                                    if(ISSET($_POST['submit'])){
                                        $keyword = $_POST['search'];
                                ?>
                                <div>
                                    <?php
                                        $query = mysqli_query($conn, "SELECT * FROM anime WHERE tenanime LIKE '%$keyword%' ORDER BY tenanime") or die(mysqli_error());
                                        while($fetch = mysqli_fetch_array($query)){
                                    ?>
                                    <table border="1" cellspacing="0" cellpadding="0" style="color:white;"> 
                                            <tr style="text-align:center;">
                                                <th>ID</th>
                                                <th>DANH MỤC</th>
                                                <th>ẢNH</th>
                                                <th>TÊN ANIME</th>
                                                <th>MÔ TẢ</th>
                                                <th>SỐ TẬP</th>
                                                <th>FILM</th>
                                                <th>TRẠNG THÁI</th>
                                                <th>NĂM PH</th>
                                                <th>LƯỢT XEM</th>
                                                <th>TÁC VỤ</th>
                                            </tr>
                                            <tr>
                                            <td><?php echo $fetch['id'];?></td>
                                            <td><?php echo $fetch['danhmuc'];?></td>
                                            <td><img src="<?php echo $fetch['anh'];?>" alt="Jane" style="width:100%"></td>
                                            <td><?php echo $fetch['tenanime'];?></td>
                                            <td><?php echo $fetch['mota'];?></td>
                                            <td><?php echo $fetch['sotap'];?></td>
                                            <td><?php echo $fetch['film'];?></td>
                                            <td><?php echo $fetch['trangthai'];?></td>
                                            <td><?php echo $fetch['namphathanh'];?></td>
                                            <td><?php echo $fetch['luotxem'];?></td>
                                            <td>
                                                <a href="xulyxoa-anime.php?id=<?php echo $id; ?>"><input type="submit" value="XÓA" class="btn-button"></a>
                                                <a href="sua-anime.php?id=<?php echo $id; ?>"><input type="submit" value="SỬA" class="btn-button"></a>
                                            </td>
                                        </tr>
                                        </table>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <?php
                                    }
                                ?>
                        </div>
                    </div>
                    <table border="1" cellspacing="0" cellpadding="0" style="color:white;margin-top:10px;">
                        <input type="submit" value="THÊM MỚI" class="btn" onclick="myFunction()">   
                        <tr style="text-align:center;">
                            <th>ID</th>
                            <th>DANH MỤC</th>
                            <th>ẢNH</th>
                            <th>TÊN ANIME</th>
                            <th>MÔ TẢ</th>
                            <th>SỐ TẬP</th>
                            <th>FILM</th>
                            <th>TRẠNG THÁI</th>
                            <th>NĂM PH</th>
                            <th>LƯỢT XEM</th>
                            <th>TÁC VỤ</th>
                        </tr>
                    <?php 
                    $conn = mysqli_connect("localhost", "root", "", "anime");
                    $sql = "SELECT * FROM anime";
                    $result = mysqli_query($conn ,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row["id"];
                        $danhmuc = $row["danhmuc"];
                        $anh = $row["anh"];
                        $tenanime = $row["tenanime"];
                        $mota = $row["mota"];
                        $sotap = $row["sotap"];
                        $film = $row["film"];
                        $trangthai = $row["trangthai"];
                        $namphathanh = $row["namphathanh"];
                        $luotxem = $row["luotxem"];
                    ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $danhmuc ?></td>
                            <td><img src="<?php echo $anh ?>" alt="Jane" style="width:100%"><td>
                            <td><?php echo $tenanime ?></td>
                            <td><?php echo $mota ?></td>
                            <td><?php echo $sotap ?></td>
                            <td><?php echo $film ?></td>
                            <td><?php echo $trangthai ?></td>
                            <td><?php echo $namphathanh ?></td>
                            <td><?php echo $luotxem ?></td>
                            <td>
                                <a href="xulyxoa-anime.php?id=<?php echo $id; ?>"><input type="submit" value="XÓA" class="btn-button"></a>
                                <a href="sua-anime.php?id=<?php echo $id; ?>"><input type="submit" value="SỬA" class="btn-button"></a>
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
        location.replace("them-anime.php");
    }
</script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>