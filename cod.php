<?php
 session_start();
 include 'db.php';
 include 'redirect.php';

$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];


$prod = $_REQUEST['sum'];
$mode="cod";
$success = "yes";

$r = $conn->prepare("INSERT INTO cod (customerid,name,address,city) values (?,?,?,?)");
$r->bindParam(1, $_SESSION['id']);
$r->bindParam(2, $name);
$r->bindParam(3, $address);
$r->bindParam(4, $city);



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
    header("location:codsuccess.php");
}

}
}
?>
