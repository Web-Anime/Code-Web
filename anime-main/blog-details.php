<!DOCTYPE html>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
    <title>BLOG | Tin Tức</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=503662930730314&autoLogAppEvents=1" nonce="ZpGbLPVX"></script>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from blog where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index-user.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <a href="blog.php">BLOG</a>
                        <span><?php echo $row['tenblog'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                        // Kết nối Database
                        require_once("Connection.php");
                        $id=$_GET['id'];
                        $query=mysqli_query($conn,"select * from blog where id='$id'");
                        $row=mysqli_fetch_assoc($query);
                    ?>
    <!-- Header End -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__title">
                        <h6><?php echo $row['loaiblog'];?> <span> <?php echo $row['ngaydang'];?></span></h6>
                        <h2><?php echo $row['tenblog'];?></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__item__text">
                            <img src="<?php echo $row['anh'];?>" alt="">
                            <p><?php echo $row['mota'];?></p>
                        </div>
                        </div>
                    </div>
                <div class="col-lg-12">
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>BÌNH LUẬN</h5>
                        </div>
                        <form action="#" style="background-color: white;">
                            <div class="fb-comments" data-href="blog-details.php?id=<?php echo $row['id']; ?>" data-width="100%" data-numposts="10"></div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
    
        <!-- Anime Section End -->
        <?php include 'View/Client/Layout/Footer.php'; ?>
        <?php include 'View/Client/Layout/Script.php'; ?>

    </body>

</html>