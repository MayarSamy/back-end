<?php
$email = $_POST["email"];

$dsn = 'mysql:dbname=aast2;host=localhost';
$username = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $username, $password);

	$sql = "DELETE FROM `users` WHERE `email` ='$email '";
	$stm = $dbh->prepare($sql);

	$stm->execute();

	include("home.php");


} catch (PDOException $e) {
	die('site down');
	echo ($e);
}
