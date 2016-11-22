<?php
include 'db.php';
 session_start();
 include 'redirectadmin.php';

$prod = $_REQUEST['pid'];
$cat = $_REQUEST['cat'];

$result = $conn->prepare("DELETE FROM products WHERE pid = :hjhjhjh");
$result->bindParam(':hjhjhjh', $prod);

$result->execute();

if($result)
{

  header("location:admin_products.php?category=$cat");
}
?>
