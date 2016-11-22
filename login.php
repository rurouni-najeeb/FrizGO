<?php
include 'db.php';
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
// new data

$user = $_POST['email'];
$password = $_POST['password'];



// query
$result = $conn->prepare("SELECT * FROM customers WHERE email= :hjhjhjh AND password= :asas");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $password);
$result->execute();


if($result) {

$_SESSION['email'] = $user;
$_SESSION['password'] = $password;

$result = $conn->prepare("SELECT * FROM customers WHERE email= :hjhjhjh");
$result->bindParam(':hjhjhjh', $user);

$result->execute();
$rows = $result->fetch();
$_SESSION['name'] = $rows['name'];
$_SESSION['id']=  $rows['cid'];

	header("location: home.php");
}
else {
	header("location: loginfail.php");
}


if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: home.php");
	exit();
}

?>
