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
    <h4>加入會員</h4>
    <div id="memberapply_wrap">
      <div class="whiteline2">
          <section id="member_apply">
            <form role="form">
              <div class="form-group2">
                <label for="exampleInputEmail1">帳號：</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="請輸入E-Mail帳號">
              </div>
              <div class="form-group2">
                <label for="exampleInputPassword1">密碼：</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
              </div>
              <div class="form-group2">
                <label for="exampleInputPassword1">確認密碼：</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
              </div>
              <div class="form-group2">
                <label for="exampleInputPassword1">姓名：</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="請輸入姓名">
              </div>
              <div class="form-group2">
                <label for="exampleInputPassword1">聯絡電話：</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="請輸入手機號碼">
              </div>
              <input type="checkbox" name="agree" value="1">我同意TwoTwoStore <a href="member_rule.php">使用條款</a><br />
              <button type="reset" class="btn btn-default">重新填寫</button>
              <button type="submit" class="btn btn-default">送出資料</button>
            </form>
          </section>
      </div>
    </div>
  </div>
  <?php include("template/footer.php"); ?>

</body>
</html>
