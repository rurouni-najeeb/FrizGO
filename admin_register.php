<?php

include 'db.php';
 session_start();

 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $pass = $_POST['password'];
 $email = $_POST['email'];
 $passkey = $_POST['pass'];


$secret = "abcd1234";

if(strcmp($passkey,$secret) == 0)
{
  $stm = $conn->prepare("SELECT * FROM admin WHERE email = ?");
  $stm->bindParam(1,$_POST['email']);
   $stm->execute();
   $ze = $stm->rowCount();
  if( $ze > 0)
  {
 header("location: admin_invalid.php");
  }
 else {

   $query = "INSERT into admin (name,email,phone,password) values (?,?,?,?)";

 $run = $conn->prepare($query);
 $run->bindparam(1,$name);

 $run->bindparam(2,$email);
 $run->bindparam(3,$phone);
  $run->bindparam(4,$pass);


 $run->execute();

 if($run) {


$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
	header("location: admin_index.php");
}
}
}
else {
  	header("location: nopasskey.php");
}



 ?>
