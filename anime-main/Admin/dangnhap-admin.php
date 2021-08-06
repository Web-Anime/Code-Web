<?php
require_once '../Connection.php';
if (isset($_POST['btn_Login'])){
    $admin = $_POST['admin'];
    $pass = $_POST['pass'];
    //làm sạch thông tin, xóa bỏ các tag html, kí tự dặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phuong thức sql ijection
    $admin = strip_tags($admin);
    $admin = addslashes($admin);
    $pass = strip_tags($pass);
    $pass = addslashes($pass);
    if($admin ==""||$pass == ""){
        echo "<script>alert('Username hoặc Password ko đuợc bỏ trống');</script>";
        require_once 'login-admin.php';
    }else{
        $sql = "select * from admin where admin='$admin' and pass='$pass'";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);
        if($num_rows==0){
            echo "<script>alert('Username hoặc Password sai');</script>";
            require_once 'login-admin.php';
        }else{
            
            session_start();//bắt đầu
            $_SESSION['admin'] = $admin;//khởi tạo
            $_SESSION['pass'] = $pass;//khởi tạo
            

//        include 'Controller/Client/Controller_Index.php';
//        $show = new Index();
//        $show->showIndex();
            header("location:Index-anime.php");
        }
    }
            
            
}
?>