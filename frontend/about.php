<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TwoTwoStore</title>
  <?php include("template/files.php"); ?>
</head>
<body>
  <?php include("template/header.php"); ?>
  <div class="intro_container">
    <h4>關於我們</h4>
    <div id="about_pic">
      <ul class="bxslider">
  	    <li>
  	      <img src="../uploads/about/about01.jpg" title="" />
  	    </li>
  	    <li>
  	      <img src="../uploads/about/about02.jpg" title="" />
  	    </li>
  	    <li>
  	      <img src="../uploads/about/about03.jpg" title="" />
  	    </li>
  	    <li>
  	      <img src="../uploads/about/about04.jpg" title="" />
  	    </li>
        <li>
  	      <img src="../uploads/about/about05.jpg" title="" />
  	    </li>
        <li>
  	      <img src="../uploads/about/about06.jpg" title="Latte小時候" />
  	    </li>
        <li>
  	      <img src="../uploads/about/about07.jpg" title="Latte小時候" />
  	    </li>
        <li>
  	      <img src="../uploads/about/about08.jpg" title="Latte小時候" />
  	    </li>
  	  </ul>
    </div>
    <div id="about_me">
      TwoTwoStore是一位喜愛小兔兔的人和她的Latte(寵物兔)所建立，雖然Latte沒有幫什麼忙(它只會吵我寫網頁而已)，
      不過它是我的靈感及動力來源。這個網站是我的RWD練習網站並不做為營利用途，設計上主要是只針對寵物兔的用品販售，
      並希望做出比較有設計質感的「寵物兔用品專賣」的購物網站。<br /><br />
      設計理念<br />
      "TwoTwo"是取音同"兔兔"，"Store"是商店，所以是"兔兔的商店"的意思。<br />
      LOGO圖象是自己設計的，因此「版權所有 • 請勿抄襲」。<br />
      此頁兔兔的照片為Latte的生活照，請勿任意使用，謝謝！<br /><br />

      TwoTwoStore感謝參考之資料來源：<br />
      http://www.bowwow.tw/<br />
      http://www.templatemonster.com/demo/45169.html<br />
      http://163.20.173.57/stud96/943/23/rabbitbb.htm<br />
      http://hanhan.xxking.com/cuni_1intro.html<br />
      http://topvet.topet.net/clinic_62.htm<br />
      http://blog.xuite.net/blue_sky23/rabbitget<br />
      https://sites.google.com/site/aituzhishiku/ai-tu-yi-liao<br />
    </div>
  </div>

  <?php include("template/footer.php"); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  <!--bxslider用-->
  <script src="../assets/bxslider/jquery.bxslider.min.js"></script>  <!--bxslider用-->
  <script>
    $(window).load(function(){
      $('.bxslider').bxSlider({
        captions: true,
        slideMargin: 5,
        auto: true
        });
     });
  </script>  <!--bxslider用-->
</body>
</html>
