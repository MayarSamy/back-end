<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task 3</title>
</head>

<body>
<h1>Welcome , <?=( $_SESSION['email'][0]) ?></h1>
<!-- <img src="<?php echo $_POST["img"] ?>" alt="Image"> -->

</body>

</html>