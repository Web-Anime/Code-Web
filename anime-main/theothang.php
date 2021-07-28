
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Top Anime | Theo Tháng</title>
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
                        $sql = "select * from anime where id='6'";
                        $query = mysqli_query($conn, $sql);
                    ?>
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>LƯỢT XEM NHIỀU NHẤT</h5>
                            </div>
                            <?php   
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Ngày</li>
                                <li data-filter=".month">Tháng</li>
                                <li data-filter=".years">Năm</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="<?php echo $data['anh']; ?>">
                                <div class="ep"><?php echo $data['sotap']; ?></div>
                                <div class="view"><i class="fa fa-eye"></i><?php echo $data['luotxem']; ?></div>
                                <h5><a href="#"><?php echo $data['tenanime']; ?></a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="<?php echo $data['anh']; ?>">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#"><?php echo $data['tenanime']; ?></a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/sidebar/tv-3.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/sidebar/tv-4.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/sidebar/tv-5.jpg">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>
        </div>
                            <?php 
                            }
                        ?>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-1.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-2.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-3.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="img/sidebar/comment-4.jpg" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Monogatari Series: Second Season</a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
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
