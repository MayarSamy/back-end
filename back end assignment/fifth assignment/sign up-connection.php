<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$userName = $_POST["userName"];
$email = $_POST["email"];
$userPassword = $_POST["password"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];

$dsn = 'mysql:dbname=aast2;host=localhost';
$username = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $username, $password);

	$sql = " INSERT INTO `users`(`firstName`, `lastName`, `email`, `username`, `password`, `age`, `phone`) 
	VALUES ('$firstName', '$lastName', '$email', '$userName', '$userPassword', '$age', '$mobile')";


	$stm = $dbh->prepare($sql);

	$stm->execute();

	include("sign in student.php");


} catch (PDOException $e) {
	die('site down');
	echo ($e);
}
