<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo1-148x96.png" type="image/x-icon">
  <meta name="description" content="Web Site Maker Description">
  <title>basket</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <style>
  @media (max-width:1124px) {
    .item .num {
      margin-left: 0!important;
    }
    .box .item {
      flex-direction: column!important;
      justify-content: center;
      height: auto!important;
      padding-top: 20px!important;
      padding-bottom: 20px!important;
    }
    .box .item .img {
      width: 200px!important;
      height: 200px!important;
      margin-bottom: 8px;
    }
    .box .item .name {
      margin-left: 0!important;
    }
    .box .item .price {
      position: static!important;
      margin-left: 0!important;
    }
    .box .item .delete {
      position: static!important;
      margin-left: 0!important;
      margin-top: 7px;
    }
    .box .bottom {
      display: flex!important;
      flex-direction: column!important;
    }
    .box .bottom .wrap {
      margin-bottom: 14px!important;
    }
    .box .bottom .btn {
      position: static!important;
      font-size: 18px!important;
    }
  }
  .item .num {
    width: 50px;
    margin-left: 15px;
  }
  .box {
    width: 100%;
    border: 1px solid #c1c1c1;
    border-radius: 7px;
  }
  .box .item {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    width: 100%;
    height: 65px;
    padding: 0 20px;
    box-sizing: border-box;
    border-bottom: 1px solid #c1c1c1;
  }
  .box .item .name {
    font-size: 17px;
    margin-left: 50px;
  }
  .box .item .price {
    position: absolute;
    right: 160px;
    font-size: 17px;
    margin-left: 100px;
  }
  .box .item .delete {
    font-size: 17px;
    position: absolute;
    right: 30px;
    color: #ff5a5a;
    text-decoration: none;
  }
  .box .item .delete i {
    margin-right: 5px;
  }
  .box .bottom {
    position: relative;
    box-sizing: border-box;
    padding: 28px 0;
  }
  .box .bottom .text {
    font-size: 20px;
  }
  .box .bottom .price {
    color: #ff5a5a;
  }
  .box .bottom .btn {
    position: absolute;
    right: 20px;
    bottom: 6px;
    padding: 15px 20px;
    border-radius: 30px;
    border: 1.5px solid #000;
    transition: .3s ease;
    color: #000;
  }
  .box .bottom .btn:hover {
    background-color: #34488a;
    color: #fff;
    border-color: #34488a;
  }

  </style>
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

  <section class="menu cid-r8Z5I8XoST" once="menu" id="menu1-g">



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
                  echo "<script>
                    alert('로그인 후 이용하십시오.');
                    history.go(-1);
                  </script>";
                  exit();
              }
              ?>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/x">css templates</a></section><section class="features16 cid-r90hVep35V" id="features16-h">



    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            장바구니</h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-1">장바구니 목록을 확인하세요</h3>
        <div class="box">
          <?php
          include('db_connect.php');
          $sql="SELECT basket FROM userinfo WHERE name='{$_SESSION[name]}'";
          $result=mysqli_fetch_array(mysqli_query($conn,$sql));
          $basketlist=explode('|',$result[0]);
          $allprice=0;
          for($i=0;$i<count($basketlist);$i++){
            $sql="SELECT product_name,price,image FROM products WHERE product_name='{$basketlist[$i]}'";
            $row=mysqli_fetch_array(mysqli_query($conn,$sql));
            if($row){
              $allprice+=$row[price];
          ?>
          <div class="item">
            <img style="width: 50px; height: 50px;" src="<?=$row[image]?>" class="img" />
            <span class="name"><?=$row[product_name]?></span>
            <span class="name">수량</span>
            <input onchange="hi(this)"id="num" class="num" type="number" min="1" value="1"/>
            <span class="price"><span id="data"><?=$row[price]?></span>원</span>
            <a class="delete" href="remove_basket.php?product=<?=$row[product_name]?>"><i class="far fa-trash-alt"></i>delete</a>
          </div>
        <?php
      }
      }
      ?>
          <div class="bottom">
            <span class="wrap">
              <span class="text">전체금액 : <span class="price"><?=$allprice?></span>원</span>
            </span>
            <a class="btn" href="buy.php"><i class="fas fa-shopping-cart"></i> 구매하기</a>
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
  <script src="./script.js"></script>
  <script>
    var data=new Array();
    var length=$('.box .item').length;
    for(var i=0; i<length; i++) {
      data[i]=$('.box .item').eq(i).children('.price').children('#data').text();
    }
    function setAlldata() {
      var result=0;
      for(i in data) {
        result+=parseInt($('.box .item').eq(i).children('.price').children('#data').text());
      }
      $('.box .bottom .wrap .text .price').text(result);
    }
    function hi(obj) {
      var c = $(obj).val();
      var index = $(obj).parent('.item').index();
      $(obj).parent('.item').children('.price').children('#data').text(parseInt(c)*parseInt(data[index]));
      setAlldata();
    }

  </script>
</body>
</html>
