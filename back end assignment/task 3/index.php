<?php
session_start();
?>

<?php 
$message = '';
$errors = [];
$email ='admin@gmail.com';
$password ='S1234s12';

    if (!empty($_POST['submit']) && empty($_POST['email'])) {
        $errors[] = 'PLease enter you email';
    }
    if (!empty($_POST['submit']) && empty($_POST['password'])) {
        $errors[] = 'PLease enter you password';
    }
    if (!empty($_POST['submit']) && ($_POST['email']) != $email ) {
        $errors[] = 'PLease enter correct email';
    }
    if (!empty($_POST['submit']) && ($_POST['password']) != $password ) {
        $errors[] = 'PLease enter correct password';
    }
    if (!empty($_POST['submit']) && ($_POST['password']) == $password && ($_POST['email']) == $email ) {
        // $message ='your email is ' .$_POST['email'] .'your password is ' . $_POST['password'];
        $_SESSION['email'] = [$_POST['email']];
        //print_r($_SESSION);
       header("Location: uploadPhoto.php");      
    }
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

<?php
    if (count($errors)) :
    ?>
        <ul>
            <?php for ($i = 0; $i < count($errors); $i++) : ?>
                <li> <?= $errors[$i] ?> </li>
            <?php endfor; ?>
        </ul>
    <?php
    endif;
    ?>

    <form method="post">
        Email
        <input type="text" name='email'>
        Password
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
    <h1>
            <?= htmlentities($message) ?>
    </h1>

</body>

</html>