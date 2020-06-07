<html>

<head>
	<title> sign up </title>
	<link rel="stylesheet" type="text/css" href="general LayOut.css">
	<link rel="stylesheet" type="text/css" href="sign up.css">
	<script src="sign up.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
	<div id="header">
		<img src="cambridge Logo.png" style="width:400px;height:100px;">
	</div>

	<div  class="container-sm" id="menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">News</a></li>
		</ul>
	</div>


	<div class="container-sm" id="contents">
		<form onsubmit="return signUp()" method="Post" action="sign up-connection.php">
			<label>First Name</label>
			<input class="container-sm" type="text" placeholder="Enter User Name" name="firstName" required><br><br>
			<label>last Name</label>
			<input class="container-sm" type="text" placeholder="Enter User Name" name="lastName" required><br><br>
			<label>User Name</label>
			<input class="container-sm" type="text" placeholder="Enter User Name" name="userName" required><br><br>
			<label>Email</label>
			<input class="container-sm" type="text" placeholder="Enter Email" name="email" required><br><br>
			<label>Mobile</label>
			<input class="container-sm" type="text" placeholder="Enter Email" name="mobile" required><br><br>
			<label>Age</label>
			<input class="container-sm" type="text" placeholder="Enter Email" name="age" required><br><br>
			<label>Password</label>
			<input class="container-sm" type="password" placeholder="Enter Password" name="password" required><br><br>
			<label>Repeat Password</label>
			<input class="container-sm" type="password" placeholder="Enter Password" name="R_password" required><br><br>
			<button type="submit">sign up </button>

		</form>
	</div>



	<div id="footer">© cambridge 2020</div>
</body>

</html>