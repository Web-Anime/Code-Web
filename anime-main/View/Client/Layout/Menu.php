<div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <div class="header__logo">
                        <a href="./index-user.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index-user.php">TRANG CHỦ</a></li>
                                <li><a href="./categories.php">THỂ LOẠI <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="tl-haihuoc.php">Hài Hước</a></li>
                                        <li><a href="tl-hanhdong.php">Hàng Động</a></li>
                                        <li><a href="tl-shounen.php">Shounen</a></li>
                                        <li><a href="tl-isekai.php">Isekai</a></li>
                                        <li><a href="tl-harem.php">Harem</a></li>
                                        <li><a href="tl-giatuong.php">Giả Tưởng</a></li>
                                    </ul>
                                </li>
                                <li><a href="theongay.php">TOP ANIME <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="theongay.php">Theo Ngày</a></li>
                                        <li><a href="theothang.php">Theo Tháng</a></li>
                                        <li><a href="theonam.php">Theo Năm</a></li>
                                    </ul>
                                </li>
                                <li><a href="lichchieu.php">LỊCH CHIẾU</a></li>
                                <li><a href="lienhe.php">LIÊN HỆ</a></li>
                                <li><a href="blog.php">BLOG</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="header__right">
                        <form action="" method="post">
                            <input type="text" name="search" style="width:74%;border-radius:15px;">
                                <input class="icon_search" type="submit" name="submit" value="" style="color:white;">
                            <a href="login.php"><span class="icon_profile"></span></a>
                        </form>
                    </div>
                    <?php
                    $servername='localhost';$username='root';$password='';$dbname = "anime";
                    $conn=mysqli_connect($servername,$username,$password,$dbname);
                    if(!$conn){
                    die('Không thể kết nối Database:' .mysql_error());
                    }
                        if(ISSET($_POST['submit'])){
                            $keyword = $_POST['search'];
                    ?>
                    <div>
                        <?php
                            $query = mysqli_query($conn, "SELECT * FROM anime WHERE tenanime LIKE '%$keyword%' ORDER BY tenanime") or die(mysqli_error());
                            while($fetch = mysqli_fetch_array($query)){
                        ?>
                            <a href="anime-details.php?id=<?php echo $fetch['id']; ?>"><img src="<?php echo $fetch['anh'];?>" alt="Jane" style="width:80%"></a>
                            <a href="anime-details.php?id=<?php echo $fetch['id']; ?>" style="color:white;"><?php echo $fetch['tenanime']?></a>
                        <?php
                            }
                        ?>
                    </div>
                    <?php
                        }
                    ?>
                </div>

            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>