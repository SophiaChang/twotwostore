<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TwoTwoStore</title>
  <?php include("template/files.php"); ?>
</head>
<script>
//兔子介紹動畫
$(function(){
  $('.intro>ul>li').hover(
      function(){
      $(this).find('.cover').animate({'right':'0px'},500);
    },function(){
      $(this).find('.cover').animate({'right':'-25%'},500);
    }
  );
}); //End document ready (功能鈕)
</script>
<body>
  <?php include("template/header.php"); ?>
  <div class="intro_container">
    <h4>主食</h4>
    <section id="News">   <!--產品內容，用News的框架！-->
      <form action="#" method="post">
          <div class="details_pic">
            <img src="../uploads/product/food001.jpg" alt="">
            <div class="newtag">NEW</div>  <!--新品標籤-->
          </div>
          <div class="details_content">
              <div class="details_name">OxBow成兔飼料</div>
              <div class="details_price">NTD 550.-</div>
              <div class="clear"></div>  <!--清除float-->
              <div class="details_no">編號：XXXXXXXXXX</div>
              <div class="details_color">
                <span>顏色：</span>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
                <span>-粉紅色</span>
              </div>
              <div class="clear"></div>
              <div class="details_size">
                <span>尺寸：</span>
                <select>
                  <option value="F">F</option>
                  <option value ="S">S</option>
                  <option value ="M">M</option>
                  <option value="L">L</option>
                </select>
              </div>
              <div class="details_size">
                <span>數量：</span>
                <select>
                  <option value="1">1</option>
                  <option value ="2">2</option>
                  <option value ="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <button type="button" name="add_cart">加入購物車</button>
              </div>
              <p class="details_description">
              【商品說明】<br />
              完全配方-匯集所有的營養成分及微量元素，適當的鈣磷比(Ca/Pratio)，
              飼養成兔必備的主食。<br />
              完美狀態-餵食與幼兔不同營養需求的配方，提供生活所需的活力達到完美健康狀態。<br />
              營養均衡-寵兔需要食用植物性的纖維食物、植物成分中的蛋白質，可對成兔提供優質
              胺基酸嚴選素材─獸醫師推薦，飼養成兔最好的選擇。<br />
              【內含成分】提摩西牧草壓縮製成顆粒<br />
              【商品規格】5磅<br />
              【商品產地】美國<br />
              【保存方法】開封前：請存放於陰涼乾燥處<br />
              　　　　　　開封後：請避免放置高溫潮濕處<br />
              【適用對象】寵物兔<br />
              </p>
              <input type="button" class="return" value="回上一頁" onclick="location.href='food.php'">              
          </div>
      </form>
    </section>
  </div>
  <?php include("template/footer.php"); ?>

</body>
</html>
