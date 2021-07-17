<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
if(isset($_POST["btnSave"]))
{
    $id = $_POST["txt_id"];
    $danhmuc = $_POST["txt_danhmuc"];
    $anh = $_POST["txt_anh"];
    $tenanime = $_POST["txt_tenanime"];
    $tenindex = $_POST["txt_tenindex"];
    $mota = $_POST["txt_mota"];
    $sotap = $_POST["txt_sotap"];
    $film = $_POST["txt_film"];
    $trangthai = $_POST["txt_trangthai"];
    $namphathanh = $_POST["txt_namphathanh"];
    $luotxem = $_POST["txt_luotxem"];
}
$sql = "UPDATE anime SET danhmuc='$danhmuc', anh='$anh', tenanime='$tenanime',
                            tenindex='$tenindex', mota='$mota', sotap='$sotap',
                            film='$film', trangthai='$trangthai', namphathanh='$namphathanh', luotxem='$luotxem' WHERE id='$id'";
if(mysqli_query($conn, $sql))
{
    header('location: Index-anime.php');
}else {
    $result = "Cap nhat chua thanh cong".mysqli_error($conn);
}
?>

