<!DOCTYPE html>
<html lang="zxx">

<head>
    <LINK REL="SHORTCUT ICON"  HREF="View/Client/WIBU.png">
    <title>Anime | Đăng Nhập</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>
<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <section class="normal-breadcrumb set-bg" data-setbg="#">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>ĐĂNG NHẬP</h2>
                        <p>Chào mừng đến với Wibu Nerver Die</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Đăng nhập</h3>
                        <form action="dangnhap.php" method="POST" onsubmit="return validateLogin()">
                            <div class="input__item">
                                <input type="text" placeholder="Tài Khoản"name="username">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Mật Khẩu"name="password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn"name="btn_Login">ĐĂNG NHẬP</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Bạn không có tài khoản?</h3>
                        <a href="signup.php" class="primary-btn">ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'View/Client/Layout/Footer.php'; ?>
    <?php include 'View/Client/Layout/Script.php'; ?>
</body>
</html>