<!DOCTYPE html>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
    <title>Thể Loại | Shounen</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>

<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <a href="categories.php">DANH MỤC</a>
                        <span>SHOUNEN</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>SHOUNEN</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>XẮP XẾP:</p>
                                        <select>
                                            <option value="">A-Z</option>
                                            <option value="">1-10</option>
                                            <option value="">10-50</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                require_once("Connection.php");
                                $query=mysqli_query($conn,"select * from anime where danhmuc='shounen' ORDER BY id DESC LIMIT 0, 20");
                                while($row = mysqli_fetch_array($query)){
                                ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="">
                                        <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh'];?>" alt="Jane" style="width:100%"></a>
                                        <div class="ep"><?php echo $row['trangthai'];?></div>
                                        <div class="comment"><i class="fa fa-comments"></i><?php echo $row['sotap'];?></div>
                                        <div class="view"><i class="fa fa-eye"></i><?php echo $row['luotxem'];?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><?php echo $row['danhmuc'];?></li>
                                        </ul>
                                        <h5><a href="#"><?php echo $row['tenanime'];?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#" class="current-page">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
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