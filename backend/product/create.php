<?php
require('../function/connection.php');
// echo $_POST['CategoryID']."<br/>";
// echo $_POST['TypeZone']."<br/>";
// echo $_POST['CategoryName']."<br/>";
// echo $_POST['ProductName']."<br/>";
// echo $_POST['ProductSize']."<br/>";
// echo $_POST['ProductColor']."<br/>";
// echo $_POST['Description']."<br/>";
// echo $_POST['ProductPrice']."<br/>";
// echo $_POST['Stock']."<br/>";
// echo $_FILES['ProductPicture']['name']."<br/>";
// echo $_POST['CreatedDate']."<br/>";

if(isset($_POST['MM_insert']) && $_POST['MM_insert'] == "AddForm"){
  // 判斷圖片是否有資料，有資料才上傳
  if(isset($_FILES['ProductPicture']['name']) && $_FILES['ProductPicture']['name'] != null){
    $filename = $_FILES['ProductPicture']['name'];
    move_uploaded_file($_FILES['ProductPicture']['tmp_name'],"../../uploads/product/".$filename);   // 搬移上傳檔案
  }
  //

  $sql= "INSERT INTO product
        (CategoryID,
         TypeZone,
         CategoryName,
         ProductName,
         ProductSize,
         ProductColor,
         Description,
         ProductPrice,
         Stock,
         ProductPicture,
         CreatedDate) VALUES
       (:CategoryID,
        :TypeZone,
        :CategoryName,
        :ProductName,
        :ProductSize,
        :ProductColor,
        :Description,
        :ProductPrice,
        :Stock,
        :ProductPicture,
        :CreatedDate)";

  $sth = $db ->prepare($sql);
  $sth ->bindParam(":CategoryID", $_POST['CategoryID'], PDO::PARAM_INT);
  $sth ->bindParam(":TypeZone", $_POST['TypeZone'], PDO::PARAM_STR);
  $sth ->bindParam(":CategoryName", $_POST['CategoryName'], PDO::PARAM_STR);
  $sth ->bindParam(":ProductName", $_POST['ProductName'], PDO::PARAM_STR);
  $sth ->bindParam(":ProductSize", $_POST['ProductSize'], PDO::PARAM_STR);
  $sth ->bindParam(":ProductColor", $_POST['ProductColor'], PDO::PARAM_STR);
  $sth ->bindParam(":Description", $_POST['Description'], PDO::PARAM_STR);
  $sth ->bindParam(":ProductPrice", $_POST['ProductPrice'], PDO::PARAM_STR);
  $sth ->bindParam(":Stock", $_POST['Stock'], PDO::PARAM_STR);
  $sth ->bindParam(":ProductPicture", $filename, PDO::PARAM_STR);
  $sth ->bindParam(":CreatedDate", $_POST['CreatedDate'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php?CategoryID='.$_POST['CategoryID']);
}

// 接收原本的類別
$sth = $db->query("SELECT * FROM category WHERE CategoryID =". $_GET['CategoryID']);
$categorys = $sth->fetch(PDO::FETCH_ASSOC);

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/tinymce/tinymce.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/tinymce/skins/lightgray/skin.min.css" rel="stylesheet" type="text/css">
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <title>TwoTwoStore</title>
  </head>
  <script type="text/javascript">
  //tinymce 程式碼
  tinymce.init({
    language: 'zh_TW',
    selector: '#Description',
    height: 500,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ]
  });
  </script>
  <body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TwoTwoStore<br></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">頁面管理 &nbsp;<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="../page/edit.php?PageID=1">關於我們</a>
                </li>
                <li>
                  <a href="../page/edit.php?PageID=2">FQA</a>
                </li>
                <li>
                  <a href="../page/edit.php?PageID=3">購物說明</a>
                </li>
                <li>
                  <a href="../page/edit.php?PageID=4">使用條款</a>
                </li>
                <li>
                  <a href="../page/edit.php?PageID=5">隱私權政策</a>
                </li>
                <li>
                  <a href="../page/edit.php?PageID=6">免責聲明</a>
                </li>
              </ul>
            </li>
            <li >
              <a href="../news/list.php">最新消息管理</a>
            </li>
            <li class="active">
              <a href="../product_category/list.php">產品管理</a>
            </li>
            <li>
              <a href="#">會員管理</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">訂單管理 &nbsp;<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">新訂單</a>
                </li>
                <li>
                  <a href="#">已付款</a>
                </li>
                <li>
                  <a href="#">出貨中</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">已出貨</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">已送達(交易完成)</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">取消訂單</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>產品管理</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li>
                <a href="#">主控台</a>
              </li>
              <li>
                <a href="list.php?CategoryID=<?php echo $_GET['CategoryID']; ?>">產品管理</a>
              </li>
              <li class="active">新增一筆</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" role="form" action="create.php" method="post" id="AddForm" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="MM_insert" value="AddForm">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="TypeZone" class="control-label">類別</label>
                </div>
                <div class="col-sm-10">
                  <!-- 帶原類別 -->
                  <?php echo $categorys['TypeZone']; ?>
                  <input type="hidden" class="form-control" id="TypeZone" name="TypeZone" value="<?php echo $categorys['TypeZone']; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="CategoryName" class="control-label">分類</label>
                </div>
                <div class="col-sm-10">
                  <!-- 帶原分類 -->
                  <?php echo $categorys['CategoryName']; ?>
                  <input type="hidden" class="form-control" id="CategoryName" name="CategoryName" value="<?php echo $categorys['CategoryName']; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="ProductName" class="control-label">名稱</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ProductName" name="ProductName">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="ProductSize" class="control-label">尺寸</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ProductSize" name="ProductSize">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="ProductColor" class="control-label">顏色</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ProductColor" name="ProductColor">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="Description" class="control-label">說明</label>
                </div>
                <div class="col-sm-10">
                  <textarea class="form-control" id="Description" name="Description"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="ProductPrice" class="control-label">價格</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ProductPrice" name="ProductPrice">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="Stock" class="control-label">庫存</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Stock" name="Stock">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="ProductPicture" class="control-label">照片</label>
                </div>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="ProductPicture" name="ProductPicture">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 text-right">
                  <input type="hidden" class="form-control" id="CreatedDate" name="CreatedDate" value="<?php echo date("Y-m-d H:i:s"); ?>">
                  <input type="hidden" class="form-control" id="CategoryID" name="CategoryID" value="<?php echo $_GET['CategoryID']; ?>">
                  <button type="submit" class="btn btn-default">送出</button>
                  <a href="list.php?CategoryID=<?php echo $_GET['CategoryID']; ?>" class="btn btn-default">取消並回上一頁</a>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div id="logo">
              <img src="../images/logo.png" width="200px" alt="logo" />
            </div>
            <p style="font-size:8pt">
              2016 © TwoTwoStore Co. Ltd. All Right Reserved. <br />
              (此為練習網站，不做營利性質！)
            </p>
          </div>
        </div>
      </div>
    </footer>


</body></html>
