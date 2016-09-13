<?php
require('../function/connection.php');
$query = $db->query("SELECT * FROM category ORDER BY TypeZone, CategoryID ASC");

$categorys = $query->fetchAll(PDO::FETCH_ASSOC);
$totalRows = count($categorys);
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <title>TwoTwoStore</title>
  </head>
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
            <li>
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
            <h1>產品分類管理</h1>
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
              <li class="active">產品分類管理</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="create.php" class="btn btn-primary">新增一筆</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <hr>
            <?php if($totalRows > 0){ ?>
            <table class="table">
              <thead>
                <tr>
                  <th style="text-align:center">產品類別</th>
                  <th style="text-align:center">產品分類</th>
                  <th style="text-align:center">編輯</th>
                  <th style="text-align:center">刪除</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($categorys as $row){ ?>
                <tr>
                  <td style="text-align:center">
                    <?php echo $row['TypeZone']; ?>
                  </td>
                  <td style="text-align:center">
                    <a href="../product/list.php?CategoryID=<?php echo $row['CategoryID'];?>">
                    <?php echo $row['CategoryName']; ?>
                    </a>
                  </td>
                  <td style="text-align:center">
                    <a href="edit.php?CategoryID=<?php echo $row['CategoryID']; ?>" class="btn btn-default">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                  </td>
                  <td style="text-align:center">
                    <a href="delete.php?CategoryID=<?php echo $row['CategoryID']; ?>" class="btn btn-default"
                       onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <?php }else{ ?>
              <p>
                目前無資料，請新增一筆。
              </p>
              <?php } ?>
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
