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
            
            session_start();//bắt đầu
            $_SESSION['username'] = $username;//khởi tạo
            $_SESSION['password'] = $password;//khởi tạo
            
            header("location:../Login/CookieAndSession/showSESSION.php");
            //header("location:home.php");
        }
    }
            
            
}
?>
