<html>

<head>
	<title> change username </title>
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
		<form method="Post" action="change-username-connection.php">
			
			<label>Email</label>
			<input class="container-sm" type="text" placeholder="Enter Email" name="email" required><br><br>		
			<label>Password</label>
			<input class="container-sm" type="password" placeholder="Enter Password" name="password" required><br><br>			
			<label>New User Name</label>
			<input class="container-sm" type="text" placeholder="Enter User Name" name="userName" required><br><br>
			<button type="submit">change name </button>

		</form>
	</div>

</body>

</html>