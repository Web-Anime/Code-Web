
<!DOCTYPE html>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
    <title>Top Anime | Theo Ngày</title>
<?php include 'View/Client/Layout/Link.php'; ?>
</head>
<style>
/* Add a card effect for articles */
.card {

   color: white;
   padding: 5px;
   border-bottom: 1px solid #fff;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.cardbox{
}
.leftcolumn{
}

.rowbox{
    border-bottom: 1px solid #fff;
}
.columnbox1 {
  float: left;
  width: 5%;
  padding-top: 30px;
  height: auto;
}
.columnbox2 {
   padding-top: 10px;
  float: left;
  width: 15%;
  height: auto;
  text-decoration: none;
}
.columnbox3 {
     padding-top: 20px;
  float: left;
  width: 70%;
  height: auto;
  text-decoration: none;
}
.columnbox4 {
  float: left;
  width: 10%;
  padding-top: 20px;
  height: auto;
  text-decoration: none;
}

.rowbox:after {
  content: "";
  display: table;
  clear: both;
}
.navbar {
    text-decoration-line: none;
}

</style>

<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index-user.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <span>TOP ANIME</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php require_once("Connection.php"); ?>
                                <?php
                                $sql = "select * from topthang";
                                $query = mysqli_query($conn, $sql);
                                ?>
                    <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title">
                                        <h4>TOP ANIME THEO: <a href="theongay.php" style="color:yellow;padding-left:15px;">Ngày</a> 
                                            <a href="theothang.php" style="color:yellow;padding-left:15px;">Tháng</a> 
                                            <a href="theonam.php" style="color:yellow;padding-left:15px;">Năm</a></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">

                                </div>
                            </div>
                        </div>

                        <?php   
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                          <div class="leftcolumn">
                            <div class="cardbox">
                                <div class="rowbox">
                                    <div class="columnbox1" style="color:red;">
                                        <p align="center"><?php echo $data['id']; ?></p>
                                    </div>
                                    <div class="columnbox2" >
                                        <p><a href="#"><img src="<?php echo $data['anh']; ?>" width="100px" height="70px" alt="alt"/></a></p>
                                        
                                    </div>
                                    <div class="columnbox3">
                                        <a href="anime-details.php?id=<?php echo $row['id']; ?>"><h5><?php echo $data['tenanime']; ?></a></h5>
                                        
                                        <p><?php echo $data['mota']; ?></p>
                                    </div>
                                    
                                    <div class="columnbox4">
                                        <p><?php echo $data['luotxem']; ?> VIEW</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                        <?php 
                            }
                        ?>
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
