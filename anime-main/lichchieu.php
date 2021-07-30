<!DOCTYPE html>
<html lang="zxx">

    <head>
        <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
        <title>Anime | Lịch Chiếu</title>
        <?php include 'View/Client/Layout/Link.php'; ?>
    </head>
    <style>
        .columncard {
            float: left;
            width: 20%;
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
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .buttoncard:hover {
            background-color: #555;
        }
        .container {
            position: relative;
            font-family: Arial;
        }
        .containerso {
            position: relative;
            font-family: Arial;
        }
        .text-block {
            position: absolute;
            top: 5px;
            left: 5px;
            background-color: red;
            padding-left: 5px;
            padding-right: 5px;
        }
        #slideshow {
            overflow: hidden;
            height: 700px;
            width: 1200px;
            margin: 0 auto;
        }

        .slide-wrapper {
            width: 4800px;
            -webkit-animation: slide 25s ease infinite;
        }

        .slide {
            float: left;
            height: 400px;
            width: 1200px;
        }


        @-webkit-keyframes slide {
            10% {margin-left: 0px;}
            20% {margin-left: -1200px;}
            30% {margin-left: -1200px;}
            40% {margin-left: -2400px;}
            50% {margin-left: -2400px;}


        }
        .tittle h2 {
            color: white;
            font-size: 42px;
            font-family: "Oswald", sans-serif;
            font-weight: 1700px;
            line-height: 52px;
            margin-top: 35px;
            margin-bottom: 8px;
            position: relative;
            top: -160px;  
        }
        .tittle p{
            color: #ffffff;
            font-size: 16px;
            margin-bottom: 40px;
            position: relative;
            top: -150px;
        }
        .col-lg-3 h2 {
            color: #ffffff;
        }
        .col-lg-6 h2 {
            color: #ffffff;
            text-align: center;
        }
        .footer-col{
            float: left;
            margin-left: 20px;
            padding-left: 135px;
            height: 123px;
        }
        .widget-title .title {
            float: left;
            margin-left: 80px;
            color:white;
            font-size: 13px;
            font-weight: bold;
            position: relative;
            margin-top: 100px;
            padding: 10px 20px;
            text-transform: uppercase;
            border: 1px solid #1B1B1B;
            border-radius: 7px;

        }
        
        .menu ul li a{
            border: 1px solid gray;
            background-color: gray;
            color: black;
            padding: 5px;
            
        }
        .menu ul li{
            margin: 3px;
            padding: 5px;
        }
        .menu ul li a:hover{
            padding-right: 15px;
            background-color: lightblue;
        }
        

    </style>

    <body>
        <?php include 'View/Client/Layout/Menu.php'; ?>

        <section class="product spad">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title">
                                        <h4>LỊCH CHIẾU: <a href="#lichchieu-2" style="color:yellow;padding-left:15px;">Thứ 2</a> 
                                        <a href="#lichchieu-3" style="color:yellow;padding-left:15px;">Thứ 3</a> 
                                        <a href="#lichchieu-4" style="color:yellow;padding-left:15px;">Thứ 4</a>
                                        <a href="#lichchieu-5" style="color:yellow;padding-left:15px;">Thứ 5</a>
                                        <a href="#lichchieu-6" style="color:yellow;padding-left:15px;">Thứ 6</a>
                                        <a href="#lichchieu-7" style="color:yellow;padding-left:15px;">Thứ 7</a>
                                        <a href="#lichchieu-cn" style="color:yellow;padding-left:15px;">Chủ Nhật</a></h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">

                                </div>
                            </div>
                        </div>
                        <div class="main"> 
                            <div class ="row">
                                <div class="col-12">
                                    <div class="lichchieu lichchieu-2"><h2 id="lichchieu-2" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">THỨ 2</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='thu2'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="lichchieu-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 20)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                 <div class="col-12">
                                    <div class="lichchieu lichchieu-3"><h2 id="lichchieu-3" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">THỨ 3</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='thu3'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                 <div class="col-12">
                                    <div class="lichchieu lichchieu-4"><h2 id="lichchieu-4" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">THỨ 4</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='thu4'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                 <div class="col-12">
                                    <div class="lichchieu lichchieu-5"><h2 id="lichchieu-5" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">THỨ 5</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='thu5'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="lichchieu lichchieu-6"><h2 id="lichchieu-6" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">THỨ 6</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='thu6'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                 <div class="col-12">
                                    <div class="lichchieu lichchieu-7"><h2 id="lichchieu-7" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">THỨ 7</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='thu7'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
                                                </div>
                                            </div>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                 <div class="col-12">
                                    <div class="lichchieu lichchieu-cn"><h2 id="lichchieu-cn" style="color:yellow;padding-left:20px;padding-bottom:10px;font-weight:700;">CHỦ NHẬT</h2>
                                        <?php
                                        require_once("Connection.php");
                                        $query = mysqli_query($conn, "select * from licchieu where lichchieu='cn'");
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>

                                            <div class="columncard">
                                                <div class="cardcard">
                                                    <div class="containercard">
                                                        <div class="containerso">
                                                            <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh']; ?>" alt="Jane" style="width:100%"></a>
                                                            <div class="text-block">
                                                                <h5><?php echo $row['thoigianchieu']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                                                        <p style="color:white;padding-top:5px;"><?php echo $row['ngaychieu']; ?></p>
                                                    </div>                             
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

                </div>
            </div>
        </section>
    <?php include 'View/Client/Layout/Footer.php'; ?>
        <?php include 'View/Client/Layout/Script.php'; ?>
    </body>

</html>