<?php
$oldPassword = $_POST["old-password"];
$Newpassword = $_POST["new-password"];


$dsn = 'mysql:dbname=aast2;host=localhost';
$username = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $username, $password);

	$sql = "UPDATE `users` SET `password`='$Newpassword' WHERE `password` ='$oldPassword'";
	$stm = $dbh->prepare($sql);

	$stm->execute();

	include("sign in student.php");


} catch (PDOException $e) {
	die('site down');
	echo ($e);
}
