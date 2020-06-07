<html>

<head>
	<title> change password </title>
	<link rel="stylesheet" type="text/css" href="general LayOut.css">
	<link rel="stylesheet" type="text/css" href="sign up.css">
	<script src="sign up.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

	<div  class="container-sm" id="menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">News</a></li>
		</ul>
	</div>


	<div class="container-sm" id="contents">
		<form method="Post" action="change-password-connection.php">
			
			<label>Old password</label>
			<input class="container-sm" type="password" placeholder="Enter old password" name="old-password" required><br><br>		
			<label>New Password</label>
			<input class="container-sm" type="password" placeholder="Enter new Password" name="new-password" required><br><br>			
			<button type="submit">change password </button>

		</form>
	</div>

</body>

</html>