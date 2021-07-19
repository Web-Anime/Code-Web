<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $id = $_POST["txt_id"];
    $anh = $_POST["txt_anh"];
    $tenblog = $_POST["txt_tenblog"];
    $mota = $_POST["txt_mota"];
    $motaindex = $_POST["txt_motaindex"];
    $loaiblog = $_POST["txt_loaiblog"];
    $ngaydang = $_POST["txt_ngaydang"];
}
$sql = "UPDATE blog SET anh='$anh', tenblog='$tenblog', mota='$mota',
                            motaindex='$motaindex', loaiblog='$loaiblog', ngaydang='$ngaydang' WHERE id='$id'";
if(mysqli_query($conn, $sql))
{
    header('location: index-blog.php');
}else {
    $result = "Cap nhat chua thanh cong".mysqli_error($conn);
}
?>