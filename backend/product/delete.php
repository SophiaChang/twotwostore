<?php
require('../function/connection.php');
$sql = "DELETE FROM product WHERE ProductID=".$_GET['ProductID'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: list.php?CategoryID='.$_GET['CategoryID']);
 ?>
