<?php
$server_host = "localhost";
$server_username = "root";
$server_password = "";
$database = 'quanlyruou';

$conn = new mysqli($server_host,$server_username,$server_password,$database);
if($conn->connect_error){
    die("Kết nối thát bại ".$conn->connect_error);
}else{
    echo"Kết nối thành công";
}
?>

