<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Anime | Đăng Kí</title>
    <?php include 'View/Client/Layout/Link.php'; ?>
</head>

<body>
    <?php include 'View/Client/Layout/Menu.php'; ?>
    <section class="normal-breadcrumb set-bg" data-setbg="#">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>ĐĂNG KÝ</h2>
                        <p>Đăng ký để trở thành Wibu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Đăng kí</h3>
                        <form action="dangky.php" method="POST" onsubmit="return validateRes()">
                            <div class="input__item">
                                <input name="username" type="text" placeholder="Tài khoản">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input name="password" type="text" placeholder="Mật khẩu">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input name="password_repeat" type="text" placeholder="Nhập lại mật khẩu">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" name="btn_regiter" class="site-btn">ĐĂNG KÍ</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Bạn đã có tài khoảng?</h3>
                        <a href="login.php" class="primary-btn">ĐĂNG NHẬP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'View/Client/Layout/Footer.php'; ?>
<?php include 'View/Client/Layout/Script.php'; ?>
</body>

</html>