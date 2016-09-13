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
    <h4>會員登入</h4>
    <div id="member_wrap">
      <div class="whiteline">
          <section id="member_login">
            <form role="form">
              <div class="form-group">
                <label for="exampleInputEmail1">帳號：</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="請輸入E-Mail帳號">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">密碼：</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
              </div>
              <button type="submit" class="btn btn-default">登入</button>
              <input type="button" value="忘記密碼" onclick="location.href='#'">
            </form>
          </section>
          <section id="member_add">
            <div class="news_subject">尚未成為會員?</div>
            <div class="pinkline"></div>
            <input type="button" value="立即加入會員" onclick="location.href='member_apply.php'">
          </section>
      </div>
    </div>
  </div>
  <?php include("template/footer.php"); ?>

</body>
</html>
