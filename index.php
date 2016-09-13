<?php
require('backend/function/connection.php');
$limit = 6;  //資料筆數
$query = $db->query("SELECT * FROM news ORDER BY PublishedDate DESC LIMIT ".$limit);
$news = $query->fetchAll(PDO::FETCH_ASSOC);
$totalRows = count($news);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TwoTwoStore</title>
  <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
  <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/jquery-3.1.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  <!--bxslider用-->
  <script src="assets/bxslider/jquery.bxslider.min.js"></script>  <!--bxslider用-->
</head>
<script>
// bxslider開始
$(window).load(function(){
  $('.bxslider').bxSlider({
    captions: true,
    slideMargin: 5,
    auto: true
    });
 });
 // bxslider結束

  $(function(){  //Start document ready

    //功能鍵開始
    $('#menuicon').click(function(){
      $('#nav').slideToggle();
    });
    //功能鍵結束

    //兔兔動畫-輪播開始
    function loop() {
        $('#twotwo').css({'right':'0'});
        $('#twotwo').animate ({
            'right': '+=1900',
        }, 20000, 'linear', function() {
            loop();
        });
    }
    loop();
    //兔兔動畫-輪播結束

    //浮動 icon 開始
    $(window).scroll(function(){
      var window_scroll = $(window).scrollTop();
      console.log(window_scroll);
      if(window_scroll > 200){
        $('#upicon').fadeIn();
      }else{
        $('#upicon').fadeOut();
      }
    });
    //浮動 icon 紿束

    //浮動 icon 滑鼠點擊開始
    $('#Pagetop').click(function(){
      $('body,html').animate({
        scrollTop:0,
      },1000);
    });
    //浮動 icon 滑鼠點擊結束

}); //End document ready

</script>

<body>
  <!--FB按讚開頭-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.7&appId=1015791218538495";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!--FB按讚結尾-->
  <div id="header">
    <div id="stripe"></div>
    <div class="container1">
      <div id="nav_top01">
        <div id="nav_top01_right" class="BGsl"><a href="#"></a></div>
        <div id="nav_top01_center" class="BGsl"><a href="#"></a></div>
        <div id="nav_top01_left" class="BGsl"><a href="#"></a></div>
      </div>
      <div id="nav_top02">
        <ul>
          <li><a href="frontend/about.php">關於我們</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/news.php">最新消息</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/member_share.php">會員分享</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/member_login.php">會員登入</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/member_apply.php">加入會員</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/contact_us.php">聯絡我們</a>&nbsp;|&nbsp;</li>
          <li><a href="#">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;購物車
              </a>
          </li>
        </ul>

        <div id="search_bar">      <!-- 搜尋功能 -->
          <form action="#" method="post">
            <input type="text" style="font-control" name="search_name">
            <button name="search_btn" type="submit" class="btn btn-default" value="search_btn">
              <i class="fa fa-search fa-lg" aria-hidden="true"></i>
            </button>
          </form>
        </div>

      </div>
      <div id="logo">
        <a href="index.php">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="menuicon" class="BGsl">
        <a class="DB" href="#">
          <span class="SrOnly">menu icon</span>
        </a>
      </div>
      <div id="nav">
        <ul>
          <li class="mleft0"><a class="DB" href="frontend/food.php">主食</a></li>
          <li><a class="DB" href="frontend/snack.php">零食</a></li>
          <li><a class="DB" href="frontend/supply.php">保健食品</a></li>
          <li><a class="DB" href="frontend/toy.php">玩具</a></li>
          <li><a class="DB" href="frontend/inside_product.php">室內用品</a></li>
          <li><a class="DB" href="frontend/outside_product.php">外出用品</a></li>
          <li><a class="DB" href="frontend/intro.php">養兔須知</a></li>
          <li class="hide"><a class="DB" href="frontend/about.php">關於我們</a></li>
          <li class="hide"><a class="DB" href="frontend/news.php">最新消息</a></li>
          <li class="hide"><a class="DB" href="frontend/member_share.php">會員分享</a></li>
          <li class="hide"><a class="DB" href="frontend/member_login.php">會員登入</a></li>
          <li class="hide"><a class="DB" href="frontend/member_apply.php">加入會員</a></li>
          <li class="hide"><a class="DB" href="frontend/contact_us.php">連絡我們</a></li>
          <li class="hide"><a class="DB" href="frontend/edm.php">訂閱電子報</a></li>
          <li class="hide"><a class="DB" href="frontend/fqa.php">FQA</a></li>
          <li class="hide"><a class="DB" href="frontend/shopping_discription.php">購物說明</a></li>
          <li class="hide"><a class="DB" href="frontend/member_rule.php">使用條款</a></li>
          <li class="hide"><a class="DB" href="frontend/private_policy.php">隱私權政策</a></li>
          <li class="hide"><a class="DB" href="frontend/policy_notice.php">免責聲明</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="banner">
    <ul class="bxslider">
	    <li>
	      <a href="#"><img src="uploads/banner/banner01.jpg" title="Oxbow新品上市，八折優惠！" /></a>
	    </li>
	    <li>
	      <a href="#"><img src="uploads/banner/banner02.jpg" title="Oxbow新品上市，八折優惠！" /></a>
	    </li>
	    <li>
	      <a href="#"><img src="uploads/banner/banner03.jpg" title="Oxbow新品上市，八折優惠！" /></a>
	    </li>
	    <li>
	      <a href="#"><img src="uploads/banner/banner04.jpg" title="Oxbow新品上市，八折優惠！" /></a>
	    </li>
      <li>
	      <a href="#"><img src="uploads/banner/banner05.jpg" title="Oxbow新品上市，八折優惠！" /></a>
	    </li>
	  </ul>
  </div>
  <div class="container1">
    <h4>最新消息</h4>
    <section id="News">
      <?php foreach($news as $row){ ?>
      <ul>
        <li class="bigbox">
          <div class="smallbox">
          <a href="frontend/news.php"><img src="uploads/news/<?php echo $row['NewsPicture']; ?>" alt=""></a>
          <div id="subject1"><h5><?php echo $row['NewsSubject']; ?></h5></div>
          <!-- <div id="content1"><?php echo $row['NewsContent']; ?></div> -->
          <div class="newtag">NEW</div>
          </div>
        </li>
      </ul>
      <?php } ?>
      <div class="clear"></div>
    </section>
    <h4>會員分享</h4>
    <section id=Shares>
      <?php foreach($news as $row){ ?>
      <ul>
        <li class="bigbox">
          <div class="smallbox">
          <a href="frontend/member_share.php"><img src="uploads/news/<?php echo $row['NewsPicture']; ?>" alt=""></a>  <!--先代用News的資料-->
          <div id="subject2"><h5><?php echo $row['NewsSubject']; ?></h5></div>  <!--先代用News的資料-->
          <!-- <div id="content2"><?php echo $row['NewsContent']; ?></div>   -->
          <!--先代用News的資料-->
          <div class="newtag">NEW</div>
          </div>
        </li>
      </ul>
      <?php } ?>
      <div class="clear"></div>
    </section>
  </div>
  <div id="footer">
    <div class="container2">
      <div id="copyright">© 2016 TwoTwoStore Copyright Reserved.</div>
      <div id="nav_bottom">
        <ul>
          <li><a href="frontend/edm.php">訂閱電子報</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/fqa.php">FQA</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/shopping_discription.php">購物說明</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/member_rule.php">使用條款</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/private_policy.php">隱私權政策</a>&nbsp;|&nbsp;</li>
          <li><a href="frontend/policy_notice.php">免責聲明</a></li>
        </ul>
      </div>
      <div id="community">
        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></a></i>
        <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></a></i>
        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></a></i>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></a></i>
      </div>
      <div id="facebook">
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
      </div>
      <div id="twotwo">
        <img src="assets/images/twotwo.gif" alt="">
      </div>
    </div>
  </div>
  <div id="upicon">
    <a id="Pagetop" href="javascript:void(0)">
      <img src="assets/images/icon_home_white.png" alt="">
    </a>
    <a href="javascript:void(0)">
      <img src="assets/images/icon_shop_white.png" alt="">
    </a>
    <a href="javascript:void(0)">
      <img src="assets/images/icon_search_white.png" alt="">
    </a>
  </div>
</body>
</html>
