<?php

include 'db.php';
 session_start();

 $name = $_POST['name'];
 $price = $_POST['price'];
 $cat = $_POST['category'];

    $detail = $_POST['detail'];


 $quantity = $_POST['quantity'];
$year = $_POST['year'];

$total = count($_FILES['file']['name']);

$paths = array();
for($i = 0 ; $i< 3; $i++)
{



$path = "images/";
$base = $_FILES['file']['name'][$i];

$base = str_replace(' ', '_', $base);
$path =$path.$base;


if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$path))
{

  $paths[$i] = $path;

}

}



$query = "INSERT into products (name,image,image2,image3,quantity,year,category,price,detail) values (?,?,?,?,?,?,?,?,?)";

$run = $conn->prepare($query);
$run->bindparam(1,$name);

$run->bindparam(2,$paths[0]);
$run->bindparam(3,$paths[1]);
$run->bindparam(4,$paths[2]);
$run->bindparam(5,$quantity);

$run->bindparam(6,$year);
$run->bindparam(7,$cat);
$run->bindparam(8,$price);
$run->bindparam(9,$detail);

$run->execute();

if($run) {

header("location: admin_products.php?category=$cat");
}









 ?>
