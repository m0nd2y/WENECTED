<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1-148x96.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>information</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/<css></css>/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>

  <div class="_header">
    <div class="_cover">
      <img src="./assets/images/KakaoTalk_20181110_233031452.png" class="_title" />
      <p>
        북한 문화와 통일을 주제로 디자인하여 상품을 판매합니다.
      </p>
    </div>
  </div>
  <?php
  include('db_connect.php');
  $no=$_GET['no'];
  $sql="SELECT * FROM products WHERE no={$no}";
  $result=mysqli_fetch_array(mysqli_query($conn,$sql));
  ?>
  <section class="menu cid-r8Z5I8XoST" once="menu" id="menu1-i">



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
                <?php
                if($_SESSION['name']){
                  ?>
                  <li class="nav-item">
                      <p class="nav-link link text-white display-7"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span><?=$_SESSION[name]?></p>
                  </li><li class="nav-item"><a class="nav-link link text-white display-7" href="logout.php"><span class="mbri-key mbr-iconfont mbr-iconfont-btn"></span>&nbsp;로그아웃</a></li></ul>
                  <?php
                }
                else{
                  ?>
                <li class="nav-item">
                    <a class="nav-link link text-white display-7" href="login.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>로그인</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-7" href="register.php"><span class="mbri-key mbr-iconfont mbr-iconfont-btn"></span>&nbsp;회원가입</a></li></ul>
                <?php
              }
              ?>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/f">easy website creator</a></section><section class="header3 cid-r90wsJyAAI mbr-fullscreen" id="header3-k">





    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure" style="width: 130%;">
                <img src="<?=$result['image']?>" alt="Mobirise">
            </div>

            <div class="media-content">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-5">
                    <?=$result['product_name']?></h1>

                <div class="mbr-section-text mbr-white pb-3 ">
                    <p class="mbr-text mbr-fonts-style display-4">가격:<?=$result['price']?><br>정보:<?=$result['product_content']?><br></p>
                </div>
                <div class="mbr-section-btn"><a class="btn btn-md btn-warning display-1" href="buy.php">구매하기</a></div>
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


</body>
</html>
