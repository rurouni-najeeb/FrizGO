<?php
include 'db.php';
 session_start();
 include 'redirect.php';
error_reporting(E_ALL);

$name = $_POST['name'];
$cardno = $_POST['cardno'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];

$prod = $_REQUEST['sum'];
$mode="card";
$success = "yes";

$r = $conn->prepare("INSERT INTO card (customerid,cardno,name,expiry,cvv) values (?,?,?,?,?)");
$r->bindParam(1, $_SESSION['id']);
$r->bindParam(2, $cardno);
$r->bindParam(3, $name);
$r->bindParam(4, $expiry);
$r->bindParam(5, $cvv);

$r->execute();

if($r)
{
$result = $conn->prepare("INSERT INTO payment (mode,amount,success,cid) values (?,?,?,?)");
$result->bindParam(1, $mode);
$result->bindParam(2, $prod);
$result->bindParam(3, $success);
$result->bindParam(4, $_SESSION['id']);

$result->execute();

if($result)
{

  $paid ="yes";


$re = $conn->prepare("UPDATE cart set paid = ? where customerid = (select cid from customers where name = ?)");
$re->bindParam(1,$paid);
$re->bindParam(2,$_SESSION['name']);
$re->execute();

if($re)
{
    header("location:paysuccess.php");
}





}
}
?>
