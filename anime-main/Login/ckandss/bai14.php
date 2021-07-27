<?php
    session_start();//bắt đầu
    $s = isset($_SESSION['color']) ? $_SESSION['color'] : '';
    echo $s;
?>
