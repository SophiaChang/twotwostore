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
// price hover 效果
$(function(){
  $('.foodlist_small').hover(
      function(){
      $(this).find('.price').css({'background':'#30272A'});    /*深灰色*/
    },function(){
      $(this).find('.price').css({'background':'#E64066'});    /*粉紅色*/
    }
  );
}); //End document ready (功能鈕)
</script>
<body>
  <?php include("template/header.php"); ?>
  <div class="intro_container">
    <h4>主食</h4>
    <div id="food_nav"> <!--分類按鈕-->
      <a id="food" href="">飼料</a>
      <a id="herbage" href="">牧草</a>
    </div>
    <section id="News">   <!--產品內容，用News的框架！-->
      <ul>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
        <li class="foodlist_big">
          <div class="foodlist_small">
            <a href="food_details.php">
              <img src="../uploads/product/food001.jpg" alt="">
              <div class="product_name">OxBow成兔飼料</div>
              <div class="price">NTD 550.-</div>
              <div class="newtag">NEW</div>
            </a>
          </div>
        </li>
      </ul>
    </section>
  </div>
  <?php include("template/footer.php"); ?>

</body>
</html>
