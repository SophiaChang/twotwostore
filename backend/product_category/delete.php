<?php
require('../function/connection.php');
$sql = "DELETE FROM category WHERE CategoryID=".$_GET['CategoryID'];
$sth = $db->prepare($sql);
$sth->execute();
header('Location: list.php');
 ?>
