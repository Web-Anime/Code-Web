<!DOCTYPE html>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
    <title>Anime | Liên Hệ</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>
<style>
 input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container-lienhe {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column-lienhe {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row-lienhe:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column-lienhe, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>

    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-6">
                                    <div class="section-title">
                                        <h4>LIÊN HỆ</h4>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6">

                                </div>
                            </div>
                        </div>
                    <div class="row-lienhe">
                        <div class="column-lienhe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11802.735669122061!2d107.58331848394333!3d16.447022736814397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1457c1ffc2d%3A0x32d40f91421ce10d!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaMO6IFh1w6Ju!5e0!3m2!1svi!2s!4v1626520039955!5m2!1svi!2s" width="520" height="590" style="border:0;padding-top: 10px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="column-lienhe">
                            <form action="xulydulieu-lienhe.php" method="POST">
                                <label style="color:white;font-size:18px;font-weight:700;">ID</label>
                                    <input type="text" id="txt_id" name="txt_id" placeholder="Ko cần nhập ..." style="border-radius:15px;">
                                <label style="color:white;font-size:18px;font-weight:700;">HỌ & TÊN</label>
                                    <input type="text" id="txt_hoten" name="txt_hoten" placeholder="Tên của bạn là..." style="border-radius:15px;">
                                <label style="color:white;font-size:18px;font-weight:700;">SDT</label>
                                    <input type="text" id="txt_sdt" name="txt_sdt" placeholder="Sdt của bạn là..." style="border-radius:15px;">
                                <label style="color:white;font-size:18px;font-weight:700;">Email</label>
                                    <input type="text" id="txt_email" name="txt_email" placeholder="Email của bạn là" style="border-radius:15px;">
                                <label style="color:white;font-size:18px;font-weight:700;">LỜI NHẮN</label>
                                    <textarea id="txt_loinhan" name="txt_loinhan" placeholder="Hãy viếc 1 câu gì đó..." style="height:170px;border-radius:15px;"></textarea>
                                <input type="submit" value="THÊM">
                            </form>
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