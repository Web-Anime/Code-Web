<!DOCTYPE html>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
    <title>Anime | Blog</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>
<style>
    * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.columnblog1 {
  float: left;
  width: 25%;
  padding-right: 10px;
  height: 150px; /* Should be removed. Only for demonstration */
}
.columnblog2 {
  float: left;
  width: 75%;
  padding: 10px;
  height: 250px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.rowblog:after {
  content: "";
  display: table;
  clear: both;
}
.columncard {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

.cardcard {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.containercard {
  padding: 0 16px;
}

.containercard::after, .rowcard::after {
  content: "";
  clear: both;
  display: table;
}

.titlecard {
  color: grey;
}

.buttoncard {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.buttoncard:hover {
}
.container {
  position: relative;
  font-family: Arial;
}
.containerso {
  position: relative;
  font-family: Arial;
}
</style>
<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <!-- Header End -->
        <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index-user.php"><i class="fa fa-home"></i>TRANG CHỦ</a>
                        <span>BLOG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title">
                                        <h4>BLOG</h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">

                                </div>
                            </div>
                        </div>
                    <?php
                        require_once("Connection.php");
                        $query=mysqli_query($conn,"select * from blog ORDER BY id DESC LIMIT 0, 10");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                    <div class="rowblog">
                        <div class="columnblog1" style="">
                            <div class="containerso">
                                <a href="blog-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh'];?>" alt="Jane" style="width:100%;height:250px;"></a>
                            </div>
                        </div>
                        <div class="columnblog2" style="background-color:#FFEC8B;">
                            <a href="blog-details.php?id=<?php echo $row['id']; ?>"><h2 style="color:black;padding-top:5px;padding-bottom:5px;"><?php echo $row['tenblog'];?></h2></a>
                            <p><?php echo $row['ngaydang'];?></p>
                            <p><?php echo substr($row['tenblog'], 0, 100)?>...</p>
                        </div>
                    </div>
                    <br>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php include 'View/Client/Layout/Footer.php'; ?>

    <?php include 'View/Client/Layout/Script.php'; ?>

</body>

</html>