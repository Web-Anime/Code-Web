<?php
$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //$id = $_POST["txt_id"];
    $admin = $_POST["txt_admin"];
    $pass = $_POST["txt_pass"];
    $id = $_POST['txt_id'];
    $name = $_POST["txt_name"];
    $email = $_POST["txt_email"];
    $sdt = $_POST['txt_sdt'];
    
}
$sql = "INSERT INTO admin(admin,pass,name,email,sdt) VALUES('$admin','$pass','$name','$email','$sdt')";
if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Thêm thành công');</script>";
    require_once'index-admin.php';
}else {
    echo "<script>alert('Lỗi thêm');</script>";
    require_once 'themdulieu-admin.php';
    //require_once 'index-nguoidung.php';
}
?>