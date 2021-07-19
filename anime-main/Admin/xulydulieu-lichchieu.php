<?php

$conn = mysqli_connect("localhost", "root", "", "anime");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["txt_id"];
    $lichchieu = $_POST['txt_lichchieu'];
    $anh = $_POST["txt_anh"];
    $tenanime = $_POST["txt_tenanime"];
    $thoigianchieu = $_POST["txt_thoigianchieu"];
    $ngaychieu = $_POST["txt_ngaychieu"];
}
$sql = "INSERT INTO licchieu VALUES('$id','$lichchieu','$anh','$tenanime','$thoigianchieu','$ngaychieu')";
if (mysqli_query($conn, $sql)) {
    header('Location: index-lichchieu.php');
} else {
    $result = "Loi them moi" . mysqli_error($conn);
}
