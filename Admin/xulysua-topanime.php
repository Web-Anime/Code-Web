<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST["txt_id"];
    $anh = $_POST["txt_anh"];
    $tenanime = $_POST["txt_tenanime"];
    $mota = $_POST["txt_mota"];
    $luotxem = $_POST["txt_luotxem"];
}
$sql = "UPDATE topngay SET anh='$anh', tenanime='$tenanime', mota='$mota',
                            luotxem='$luotxem' WHERE id='$id'";
if(mysqli_query($conn, $sql))
{
    header('location: index-topanime.php');
}else {
    $result = "Cap nhat chua thanh cong".mysqli_error($conn);
}
?>