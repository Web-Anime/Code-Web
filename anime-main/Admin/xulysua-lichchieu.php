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
$sql = "UPDATE licchieu SET lichchieu ='$lichchieu' ,anh='$anh', tenanime='$tenanime', thoigianchieu='$thoigianchieu', ngaychieu='$ngaychieu'
                             WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header('location: index-lichchieu.php');
} else {
    $result = "Cap nhat chua thanh cong" . mysqli_error($conn);
}
?>