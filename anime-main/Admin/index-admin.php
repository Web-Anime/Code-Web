<?php session_start(); ?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>ADMIN BLOG</title>
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
                        <a href="index-admin.php">ADMIN</a>
                        <a href="login-admin.php">ĐĂNG NHẬP</a>
                        <a href="../dangxuat-admin.php">ĐĂNG XUẤT</a>
                    </div>
                </div>
                <div class="main">
                    <h3 align="center" style="color:white;margin-bottom:10px;">DANH SÁCH TÀI KHOẢN ADMIN</h3>
                    <table border="1" align="center" cellspacing="0" cellpadding="0" witch="850px" style="color:white;">
                        <input type="submit" value="THÊM MỚI" class="btn" onclick="myFunction()">
                        <tr>
                            <th align="center">MÃ TÀI KHOẢN</th>
                            <th align="center">TÀI KHOẢN</th>
                            <th align="center">MẬT KHẨU</th>
                            <th align="center">TÊN ADMIN</th>
                            <th align="center">EMAIL</th>
                            <th align="center">SỐ ĐIỆN THOẠI</th>
                            <th align="center">CHỨC NĂNG</th>
                        </tr>
                    <?php if(isset($_SESSION['admin']) && isset($_SESSION['pass'])){ ?>
                    <?php 
                    $conn = mysqli_connect("localhost", "root", "", "anime");
                    $sql = "SELECT * FROM admin";
                    $result = mysqli_query($conn ,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $admin = $row['admin'];
                        $pass = $row['pass'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $sdt = $row['sdt'];
                        
                    ?>
                        <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $admin?></td>
                            <td><?php echo $pass?></td>
                            <td><?php echo $name?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $sdt?></td>
                            
                            <td>
                                <a href="xulyxoa-admin.php?id=<?php echo $id; ?>"><input type="submit" value="XÓA" class="btn-button"></a>
                                <a href="suadulieu-admin.php?id=<?php echo $id; ?>"><input type="submit" value="SỬA" class="btn-button"></a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                        <?php 
                        mysqli_close($conn); ?>
                        
                        <?php }else{
                            echo "<script>alert('Bạn Chưa đăng nhập! Vui lòng đăng nhập!');</script>";
                        }
                        ?>
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
        location.replace("themdulieu-admin.php");
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