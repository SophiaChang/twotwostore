<?php
require('../backend/function/connection.php');
$query = $db->query("SELECT * FROM news ORDER BY PublishedDate DESC");
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
  <?php include("template/files.php"); ?>
</head>
<body>
  <?php include("template/header.php"); ?>
  <div class="intro_container">
    <h4>會員分享</h4>
    <?php foreach($news as $row){ ?>      <!--先用news代替-->
    <div class="news_wrap">
        <div id="news_pic">
          <a href="#">
            <img src="../uploads/news/<?php echo $row['NewsPicture']; ?>" alt="" />
            <div class="newtag">NEW</div>
          </a>
        </div>
        <div id="news_text">
          <div class="news_subject"><?php echo $row['NewsSubject']; ?></div>
          <div class="news_date">發佈日期：<?php echo $row['PublishedDate']; ?></div>
          <div class="news_content"><?php echo $row['NewsContent']; ?></div>
        </div>
    </div>
    <div class="clear"></div>
    <?php } ?>
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
