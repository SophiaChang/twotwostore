<div class="clear"></div>
<div id="footer">
  <div class="container2">
    <div id="copyright">© 2016 TwoTwoStore Copyright Reserved.</div>
    <div id="nav_bottom">
      <ul>
        <li><a href="edm.php">訂閱電子報</a>&nbsp;|&nbsp;</li>
        <li><a href="fqa.php">FQA</a>&nbsp;|&nbsp;</li>
        <li><a href="shopping_discription.php">購物說明</a>&nbsp;|&nbsp;</li>
        <li><a href="member_rule.php">使用條款</a>&nbsp;|&nbsp;</li>
        <li><a href="private_policy.php">隱私權政策</a>&nbsp;|&nbsp;</li>
        <li><a href="policy_notice.php">免責聲明</a></li>
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
      <img src="../assets/images/twotwo.gif" alt="">
    </div>
  </div>
</div>
<script>
  $(function(){
    $('#menuicon').click(function(){
      $('#nav').slideToggle();
    }); //End click
  }); //End document ready (功能鈕)

  //兔兔動畫-輪播
  $(function() {
    function loop() {
        $('#twotwo').css({'right':'0'});
        $('#twotwo').animate ({
            'right': '+=1900',
        }, 20000, 'linear', function() {
            loop();
        });
    }
    loop();
  });
</script>
<div id="upicon">
  <a href="#"><img src="../assets/images/icon_home_white.png" alt=""></a>
  <a href="#"><img src="../assets/images/icon_shop_white.png" alt=""></a>
  <a href="#"><img src="../assets/images/icon_search_white.png" alt=""></a>
</div>
