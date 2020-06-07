<?php

$userName = $_POST["userName"];
$userPassword = $_POST["password"];


$dsn = 'mysql:dbname=aast2;host=localhost';
$username = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $username, $password);

	$sql = "SELECT `password` FROM `users` WHERE `username` ='$userName' 
	";

	$stm = $dbh->prepare($sql);

	$stm->execute();

	$fetchedPassword = $stm->fetch();

	if($userPassword == $fetchedPassword[0])
	{
		include("sign in student.php");
	}


} catch (PDOException $e) {
	die('site down');
	echo ($e);
}

?>