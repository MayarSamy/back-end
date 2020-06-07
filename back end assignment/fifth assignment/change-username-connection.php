<?php
$email= $_POST["email"];
$userName = $_POST["userName"];
$userPassword = $_POST["password"];


$dsn = 'mysql:dbname=aast2;host=localhost';
$username = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $username, $password);

	$sql = "UPDATE `users` SET `username`='$userName' WHERE `email` ='$email' AND `password` ='$userPassword'";
	$stm = $dbh->prepare($sql);

	$stm->execute();

	include("sign in student.php");


} catch (PDOException $e) {
	die('site down');
	echo ($e);
}
