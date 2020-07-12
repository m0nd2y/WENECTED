<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1-148x96.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>register</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <section class="menu cid-r8Z5I8XoST" once="menu" id="menu1-a">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="shop.php">
                         <img src="assets/images/logo1-148x96.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
            </div>
        </div>
        <?php
        session_start();
        ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-7" href="basket.php"><span class="mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>장바구니</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-7" href="login.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>로그인</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-7" href="register.php"><span class="mbri-key mbr-iconfont mbr-iconfont-btn"></span>&nbsp;회원가입</a></li></ul>

        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/v">free html templates</a></section><section class="mbr-section form1 cid-r90fnfWE28" id="form1-c">




    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Register</h2>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8">

                    <form class="mbr-form" action="join.php" method="post">
                        <div class="row row-sm-offset">
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-1">Name</label>
                                    <input type="text" class="form-control" name="name" required="" placeholder="ex) 홍길동">
                                </div>
                            </div>
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-1">Email</label>
                                    <input type="email" class="form-control" name="email" required="" placeholder="ex) Wennected@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="ex) 123456789">
                                </div>
                            </div>
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-1">Re_Password</label>
                                    <input type="password" class="form-control" name="password2" placeholder="ex) 123456789">
                                </div>
                            </div>
                        </div>


                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary btn-form display-4" value="회원가입">
                        </span>
                    </form>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


</body>
</html>
