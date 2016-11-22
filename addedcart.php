<?php
 session_start();
 include 'db.php';
 include 'redirect.php';
$paid = 'no';
$prod = $_POST['pid'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$net = $_POST['net'];
$total = $quantity*$price;
$net = $net - $quantity;

$resu = $conn->prepare("UPDATE products set quantity = ? where pid = ?");
$resu->bindParam(1, $net);
$resu->bindParam(2, $prod);
$resu->execute();


$resul = $conn->prepare("INSERT into cart (customerid,pid,paid,quantity,totalprice) values (?,?,?,?,?)");
$resul->bindParam(1, $_SESSION['id']);
$resul->bindParam(2, $prod);
$resul->bindParam(3, $paid);
$resul->bindParam(4, $quantity);
$resul->bindParam(5, $total);

$resul->execute();

if($resul && $resu)
{
header("location:checkout.php");
}
?>
