<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1-148x96.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>shop</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

<style>
    .like-content {
    display: inline-block;
    width: 100%;
    margin: 20px 0 0;
    padding: 20px 0 0;
    font-size: 12px;
    border-top: 10px dashed #eee;
    text-align: center;
}
.like-content span {
    color: #9d9da4;
    font-family: monospace;
}
.like-content .btn-secondary {
      display: block;
      margin: 20px auto 0px;
    text-align: center;
    background: #ed2553;
    border-radius: 30px;
    box-shadow: 0 10px 20px -8px rgb(240, 75, 113);
    padding: 10px 17px;
    font-size: 18px;
    cursor: pointer;
    border: none;
    outline: none;
    color: #ffffff;
    text-decoration: none;
    -webkit-transition: 0.3s ease;
    transition: 0.3s ease;
}
.like-content .btn-secondary:hover {
      transform: translateY(-3px);
}
.like-content .btn-secondary .fa {
      margin-right: 5px;
}
.animate-like {
    animation-name: likeAnimation;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    animation-duration: 0.65s;
}
@keyframes likeAnimation {
  0%   { transform: scale(30); }
  100% { transform: scale(1); }
}
        </style>

</head>
<body>
  <section class="menu cid-r8Z5I8XoST" once="menu" id="menu1-0">



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

<section class="engine"><a href="https://mobirise.info/r">free bootstrap template</a></section>

<div class="_header">
  <div class="_cover">
    <img src="./assets/images/KakaoTalk_20181110_233031452.png" class="_title" />
    <p>
      북한 문화와 통일을 주제로 디자인하여 상품을 판매합니다.
    </p>
  </div>
</div>

    <section class="features15 cid-r8Z5XAgWAB" id="features15-3">




    <div class="container">
        <h2 style="font-family: none;"class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><span class="boldg">Product</span> <span class="hi">Info</span></h2>


        <div class="media-container-row container pt-5 mt-2">

            <div class="col-12 col-md-6 mb-4 col-lg-4">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <img src="./assets/images/hoodie design eclipse.png" alt="Mobirise">
                    </div>
                    <div class="card_back card_cont">
                        <p class="mbr-text mbr-fonts-style display-7">
                상품 명:옹근 월식 그래픽 디자인 후드티
                </p>
                       <div class="like-content">
                <span>
                가격:50000
                </span>

                <button class="btn-secondary like-review" onclick="location.href='information.php?no=1'">
                <i class="fa fa-heart" aria-hidden="true"></i> 구매하기
                </button>
                <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=옹근 월식 그래픽 디자인 후드티">장바구니</a></div>
                </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4 col-lg-4">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <img src="./assets/images/phonecase design eclipse.png" alt="Mobirise">
                    </div>
                    <div class="card_back card_cont">
                        <p class="mbr-text mbr-fonts-style display-7">
                상품 명:옹근 월식 그래픽 디자인 폰 케이스
                </p>
                       <div class="like-content">
                <span>
                가격:25000
                </span>

                <button class="btn-secondary like-review" onclick="location.href='information.php?no=2'">
                <i class="fa fa-heart" aria-hidden="true"></i> 구매하기
                </button>
                  <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=옹근 월식 그래픽 디자인 폰 케이스">장바구니</a></div>

                </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mb-4 col-lg-4">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <img src="./assets/images/tumbler design eclipse.png" alt="Mobirise">
                    </div>
                    <div class="card_back card_cont">
                        <p class="mbr-text mbr-fonts-style display-7">
                상품 명:옹근 월식 그래픽 디자인 텀블러
                </p>
                       <div class="like-content">
                <span>
                가격:18900
                </span>

                <button class="btn-secondary like-review" onclick="location.href='information.php?no=3'">
                <i class="fa fa-heart" aria-hidden="true"></i> 구매하기
                </button>
                <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=옹근 월식 그래픽 디자인 텀블러">장바구니</a></div>
                </div>
                    </div>
                </div>
            </div>


        </div>
</div></section>

<section class="features15 cid-r8Z6ipmKzp" id="features15-4">




    <div class="container">



        <div class="media-container-row container pt-5 mt-2">

          <div class="col-12 col-md-6 mb-4 col-lg-4">
              <div class="card flip-card p-5 align-center">
                  <div class="card-front card_cont">
                      <img src="./assets/images/hoodie design motorcycle.png
" alt="Mobirise">
                  </div>
                  <div class="card_back card_cont">
                      <p class="mbr-text mbr-fonts-style display-7">
              상품 명:모터 찌클 그래픽 디자인 후드티
              </p>
                     <div class="like-content">
              <span>
              가격:50000
              </span>

              <button class="btn-secondary like-review" onclick="location.href='information.php?no=4'">
              <i class="fa fa-heart" aria-hidden="true"></i> 구매하기
              </button>
              <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=모터 찌클 그래픽 디자인 후드티">장바구니</a></div>
              </div>
                  </div>
              </div>
          </div>

          <div class="col-12 col-md-6 mb-4 col-lg-4">
              <div class="card flip-card p-5 align-center">
                  <div class="card-front card_cont">
                      <img src="./assets/images/phonecase design motorcycle.png" alt="Mobirise">
                  </div>
                  <div class="card_back card_cont">
                      <p class="mbr-text mbr-fonts-style display-7">
              상품 명:모터 찌클 그래픽 디자인 폰 케이스
              </p>
                     <div class="like-content">
              <span>
              가격:25000
              </span>

              <button class="btn-secondary like-review" onclick="location.href='information.php?no=5'">
              <i class="fa fa-heart" aria-hidden="true"></i> 구매하기
              </button>
              <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=모터 찌클 그래픽 디자인 폰 케이스">장바구니</a></div>
              </div>
                  </div>
              </div>
          </div>

          <div class="col-12 col-md-6 mb-4 col-lg-4">
              <div class="card flip-card p-5 align-center">
                  <div class="card-front card_cont">
                      <img src="./assets/images/tumbler design motorcycle.png" alt="Mobirise">
                  </div>
                  <div class="card_back card_cont">
                      <p class="mbr-text mbr-fonts-style display-7">
              상품 명:모터 찌클 그래픽 디자인 텀블러
              </p>
                     <div class="like-content">
              <span>
              가격:18900
              </span>

              <button class="btn-secondary like-review">
              <i class="fa fa-heart" aria-hidden="true" onclick="location.href='information.php?no=6'"></i> 구매하기
              </button>
              <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=모터 찌클 그래픽 디자인 텀블러">장바구니</a></div>
              </div>
                  </div>
              </div>
          </div>


        </div>
</div></section>

<section class="features15 cid-r8Z6jWMneK" id="features15-5">




    <div class="container">



        <div class="media-container-row container pt-5 mt-2">

          <div class="col-12 col-md-6 mb-4 col-lg-4">
              <div class="card flip-card p-5 align-center">
                  <div class="card-front card_cont">
                      <img src="./assets/images/hoodie design square.png" alt="Mobirise">
                  </div>
                  <div class="card_back card_cont">
                      <p class="mbr-text mbr-fonts-style display-7">
              상품 명:바른-사각형 그래픽 디자인 후드티
              </p>
                     <div class="like-content">
              <span>
              가격:50000
              </span>

              <button class="btn-secondary like-review">
              <i class="fa fa-heart" aria-hidden="true" onclick="location.href='information.php?no=7'"></i> 구매하기
              </button>
              <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=바른-사각형 그래픽 디자인 후드티">장바구니</a></div>
              </div>
                  </div>
              </div>
          </div>

          <div class="col-12 col-md-6 mb-4 col-lg-4">
              <div class="card flip-card p-5 align-center">
                  <div class="card-front card_cont">
                      <img src="./assets/images/phonecase design square.png" alt="Mobirise">
                  </div>
                  <div class="card_back card_cont">
                      <p class="mbr-text mbr-fonts-style display-7">
              상품 명:바른-사각형 그래픽 디자인 폰 케이스
              </p>
                     <div class="like-content">
              <span>
              가격:25000
              </span>

              <button class="btn-secondary like-review">
              <i class="fa fa-heart" aria-hidden="true" onclick="location.href='information.php?no=8'"></i> 구매하기
              </button>
              <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=바른-사각형 그래픽 디자인 폰 케이스">장바구니</a></div>
              </div>
                  </div>
              </div>
          </div>

          <div class="col-12 col-md-6 mb-4 col-lg-4">
              <div class="card flip-card p-5 align-center">
                  <div class="card-front card_cont">
                      <img src="./assets/images/tumbler design square.png" alt="Mobirise">
                  </div>
                  <div class="card_back card_cont">
                      <p class="mbr-text mbr-fonts-style display-7">
              상품 명:바른-사각형 그래픽 디자인 텀블러
              </p>
                     <div class="like-content">
              <span>
              가격:18900
              </span>

              <button class="btn-secondary like-review">
              <i class="fa fa-heart" aria-hidden="true" onclick="location.href='information.php?no=9'"></i> 구매하기
              </button>
              <div class="mbr-section-btn"><a style="width: 150px; height: 50px; font-size: 17px; padding: 16px 20px;" class="btn btn-md btn-warning display-1" href="input_basket.php?product=바른-사각형 그래픽 디자인 텀블러">장바구니</a></div>
              </div>
                  </div>
              </div>
          </div>


        </div>
</div></section>

<section class="cid-r8ZPrEm9Kr" id="footer1-9">





    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.co/">
                        <img src="assets/images/logo2-192x125.png" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Team</h5>
                <p class="mbr-text">Umbrella( S.D )</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: Umbrella@gmail.com
                    <br>Phone: 010-4724-6757&nbsp;<br><br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="index.html">Umbrella_main</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 Umbrella - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/7ad89d9866.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/mbr-flip-card/mbr-flip-card.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
