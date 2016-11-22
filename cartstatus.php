<?php

$result = $conn->prepare("SELECT  sum(totalprice) as  pr,  count(customerid) as count from cart cr WHERE customerid = ? and paid != ? order by cr.cid DESC");
$result->bindParam(1,$_SESSION['id']);
$result->bindParam(2,$paid);
$result->execute();
$rows = $result->fetch();



$cartsum = $rows['pr'];
  $cartno = $rows['count'];





 ?>
