
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title">
                                        <h4>ANIME MỚI</h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">
                                    <div class="dropdownbtn">
                                        <button class="dropbtn">Xắp xếp</button>
                                        <div class="dropdown-content">
                                            <a href="#">Mới nhất</a>
                                            <a href="#">Cũ nhất</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        require_once("Connection.php");
                        $query=mysqli_query($conn,"select * from anime ORDER BY id DESC LIMIT 0, 20");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                    
                        <div class="columncard">
                          <div class="cardcard">
                            <div class="containercard">
                            <div class="containerso">
                                <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh'];?>" alt="Jane" style="width:100%"></a>
                                <div class="text-block">
                                    <h5><?php echo $row['sotap'];?></h5>
                                </div>
                            </div>
                              <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                            </div>
                          </div>
                        </div>
                        <?php
                            }
                        ?>
                        <a href="categories.php"><button class="btn">XEM THÊM</button></a>
                        <!-- -------------------------------------------------- -->
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title" style="padding-top:30px;">
                                        <h4>XEM GẦN ĐÂY</h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">

                                </div>
                            </div>
                        </div>
                    <?php
                        require_once("Connection.php");
                        $query=mysqli_query($conn,"select * from anime ORDER BY id LIMIT 0, 8");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                    
                        <div class="columncard">
                          <div class="cardcard">
                            <div class="containercard">
                            <div class="containerso">
                                <a href="anime-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh'];?>" alt="Jane" style="width:100%"></a>
                                <div class="text-block">
                                    <h5><?php echo $row['sotap'];?></h5>
                                </div>
                            </div>
                              <p style="color:white;padding-top:5px;"><?php echo substr($row['tenanime'], 0, 13)?>...</p>
                            </div>
                          </div>
                        </div>
                        <?php
                            }
                        ?>
                        <a href="categories.php"><button class="btn">XEM THÊM</button></a>
                        <!-- -------------------------------------------------- -->
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title" style="padding-top:30px;">
                                        <h4>TIN TỨC ANIME</h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">

                                </div>
                            </div>
                        </div>
                        <?php
                            require_once("Connection.php");
                            $query=mysqli_query($conn,"select * from blog ORDER BY id DESC LIMIT 0, 3");
                            while($row = mysqli_fetch_array($query)){
                            ?>

                            <div class="columncardblog">
                              <div class="cardcardblog">
                                <div class="containercardblog">
                                <div class="containersoblog">
                                    <a href="blog-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['anh'];?>" alt="Jane" style="width:100%"></a>
                                    <h5><?php echo $row['ngaydang'];?></h5>
                                </div>
                                  <p style="color:white;padding-top:5px;"><?php echo $row['tenblog'];?></p>
                                </div>
                              </div>
                            </div>
                            <?php
                                }
                            ?>    
                            <a href="blog.php"><button class="btn">XEM THÊM</button></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <?php require_once("Connection.php"); ?>
                    <?php
                        $sql = "select * from anime ORDER BY luotxem LIMIT 0, 5";
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