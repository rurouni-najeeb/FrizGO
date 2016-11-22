<?php

include 'db.php';
 session_start();

 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $pass = $_POST['password'];
 $email = $_POST['email'];






  $stm = $conn->prepare("SELECT * FROM customers WHERE email = ?");
  $stm->bindParam(1,$_POST['email']);
   $stm->execute();
   $ze = $stm->rowCount();
  if( $ze > 0)
  {
 header("location: invalid.php");
  }
 else {

   $query = "INSERT into customers (name,password,email,phone) values (?,?,?,?)";

 $run = $conn->prepare($query);
 $run->bindparam(1,$name);
 $run->bindparam(2,$pass);
 $run->bindparam(3,$email);
 $run->bindparam(4,$phone);


 $run->execute();

 if($run) {

 }
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
	header("location: home.php");

}
 ?>
