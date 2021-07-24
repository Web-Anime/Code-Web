<?php
require_once 'Cn.php';
if (isset($_POST['btn_Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //làm sạch thông tin, xóa bỏ các tag html, kí tự dặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phuong thức sql ijection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if($username ==""||$password == ""){
        header('location:ThieuThongTin.php');
    }else{
        $sql = "select * from khachhang where USERNAME='$username' and PASSWORD='$password'";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);
        if($num_rows==0){
            header('location:KhongDung.php');
        }else{
            //$_COOKIE['username'] = $username;
            //$_COOKIE['password'] = $password;
            
            setcookie('username',$_POST['username'],time()+3000);
            setcookie('password',$_POST['password'],time()+3000);
            header('location:../Login/CookieAndSession/ShowCookie.php');
            
            //$_SESSION['username'] = $username;
            //thực hiện hành động sau khi lưu thông tin vào session
            //ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là home.php
            //header('location:../Login/home.php');
        }
    }
            
            
}
?>
