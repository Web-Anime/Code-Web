<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Thể Loại | Giới Thiệu</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>

<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from lichchieu where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <a href="./categories.php">GIỚI THIỆU PHIM</a>
                        <span><?php echo $row['tenanime'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
                    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from lichchieu where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?php echo $row['anh'];?>">
                            <div class="comment"><i class="fa fa-comments"></i> <?php echo $row['lichchieu'];?></div>
                            <div class="view"><i class="fa fa-eye"></i> <?php echo $row['thoigianchieu'];?></div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?php echo $row['tenanime'];?></h3>
                                <span>フェイト／ステイナイト, Feito／sutei naito</span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>

                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>

                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Thời Lượng:</span> 24 min/ep</li>
                                            <li><span>Chất Lượng:</span> HD</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"> Trailer</a>
                                <a href="#" class="watch-btn"><span>Xem Ngay</span> <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        
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
                    <div class="col-lg-4 col-md-4">
                    <?php require_once("Connection.php"); ?>
                    <?php
                        $sql = "select * from anime ORDER BY id LIMIT 0, 5";
                        $query = mysqli_query($conn, $sql);
                    ?>
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>CÓ THỂ BẠN SẼ THÍCH</h5>
                            </div>
                            <?php   
                                while ($data = mysqli_fetch_array($query)) {
                            ?>  
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="<?php echo $data['anh']; ?>">
                                <div class="ep"><?php echo $data['sotap']; ?></div>
                                <div class="view"><i class="fa fa-eye"></i><?php echo $data['luotxem']; ?></div>
                                <h5><a href="anime-details.php?id=<?php echo $data['id']; ?>"><?php echo $data['tenanime']; ?></a></h5>
                            </div>
                            </div>
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    <?php include 'View/Client/Layout/Footer.php'; ?>
    <?php include 'View/Client/Layout/Script.php'; ?>

    </body>

    </html>