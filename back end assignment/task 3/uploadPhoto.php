<?php
session_start();
?>

<?php
if (isset($_POST['img'])) {
    $image = $_FILES['file']['tmp_name'];
    $phototype = $_FILES['file']['type'];

    if (($_FILES["file"]["type"]) == "image.gif" || ($_FILES["file"]["type"]) == "image.jpeg" || ($_FILES["file"]["type"]) == "image.jpg" || ($_FILES["file"]["type"]) == "image.png") {
        header("Location:upload.php");
    } else {
        echo "Please upload a valid Image";
    }
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

    <form action="upload.php" method="post" enctype="multipart/form-data">
        upload your photo
        <input type="file" id="img" name="img" accept="image/*">
        <br>
        <input type="submit" name="submit">

    </form>


</body>

</html>