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
    <h4>聯絡我們</h4>
    <div id="contactus_wrap">
      <div class="whiteline3">
          <section id="contactus_form">
            <form>
              <div class="contactus_box">
                <div class="Label">
                  <label>E-Mail：</label>
                </div>
                <div class="Input">
                  <input type="email" placeholder="請輸入E-Mail">
                </div>
              </div>
              <div class="contactus_box">
                <label>姓名：</label>
                <input type="text" placeholder="請輸入姓名">
              </div>
              <div class="contactus_box">
                <label>聯絡電話：</label>
                <input type="text" placeholder="請輸入手機號碼">
              </div>
              <div class="contactus_box">
                <label>您的意見主旨：</label>
                <input type="text" placeholder="請輸入手機號碼">
              </div>
              <div class="contactus_box">
                <label>您的意見內容：</label>
                <textarea rows="3"></textarea>
              </div>
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
