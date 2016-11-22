<?php
include 'db.php';
 session_start();
 include 'redirect.php';

$prod = $_REQUEST['cid'];
$pid = $_REQUEST['pid'];
$quantity = $_REQUEST['quantity'];

$result = $conn->prepare("SELECT *  FROM products WHERE pid = :hjhjhjh");
$result->bindParam(':hjhjhjh', $pid);

$result->execute();
$cr = $result->fetch();

$up = $cr['quantity'];
$up = $up + $quantity;


$result = $conn->prepare("UPDATE products set quantity = ?  WHERE pid = ?");
$result->bindParam(1, $up);
$result->bindParam(2, $pid);

$result->execute();




$result = $conn->prepare("DELETE FROM cart WHERE cid = :hjhjhjh");
$result->bindParam(':hjhjhjh', $prod);

$result->execute();

if($result)
{

  header("location:checkout.php");
}
?>
