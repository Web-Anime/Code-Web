<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Thể Loại | Xem Phim</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>

<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from anime where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index-user.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <a href="./categories.php">DANH MỤC</a>
                        <a href="#">GIỚI THIỆU PHIM</a>
                        <span><?php echo $row['tenanime'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <video id="player" playsinline controls data-poster="#">
                            <source src="<?php echo $row['film'];?>" type="video/mp4" />
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video>
                    </div>
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>TẬP</h5>
                        </div>
                        <a href="#">Tập 01</a>
                        <a href="#">Tập 02</a>
                        <a href="#">Tập 03</a>
                        <a href="#">Tập 04</a>
                        <a href="#">Tập 05</a>
                        <a href="#">Tập 06</a>
                        <a href="#">Tập 07</a>
                        <a href="#">Tập 08</a>
                        <a href="#">Tập 09</a>
                        <a href="#">Tập 10</a>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>BÌNH LUẬN</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Aaa"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> GỬI</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php include 'View/Client/Layout/Footer.php'; ?>
<?php include 'View/Client/Layout/Script.php'; ?>
</body>

</html>