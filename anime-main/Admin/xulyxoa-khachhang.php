<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
$username = $_GET["id"];

$sql = "DELETE FROM khachhang WHERE id = '$username'";
if (mysqli_query($conn, $sql))
{
    header('location: index-nguoidung.php');
}else {
    $result = "xoa ko thanh cong".mysql_error($conn);
}
mysqli_close($conn);
?>