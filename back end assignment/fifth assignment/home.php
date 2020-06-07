<html>

<head>
	<title> Registration Home page </title>
	<link rel="stylesheet" type="text/css" href="general LayOut.css">
	<script src="login.js"></script>
	<link rel="stylesheet" type="text/css" href="css">
	<script src="js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body>
	<div >
		<div id="header">
			<img src="cambridge Logo.png" style="width:400px;height:100px;">
		</div>

		<div class="container-sm" id="menu">

			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">News</a></li>

			</ul>
		</div>

		<div class="container-sm">
			<div class="row">
				<div class="col-3 " id="sidebar">
					<div class="row">
						<img class="container-sm" src="login.png">
					</div>
					<div class="row container-sm">
						<form method="post" action="login_check-connection.php">
							<label> Username </label>
							<input class="row container-md" type="text" name="userName"/><br><br>
							<label> Password </label>
							<input class="row container-md" type="password" name="password" /><br><br>
							<input type="submit" value="Login" onclick="validation();" />
							<input type="button" value="sign up" onclick="window.location.href = 'sign up.php'" ; />
						</form>
					</div>
				</div>

				<div class="col-4 " id="contents-sm">
					<h1>Why Cambridge International?</h1>
					<img class="container-sm" src="homepage.png" onmouseover=" this.src='HOME rollover.jpg'" onmouseout=" this.src='homepage.png'">
					<p>
						Success in Cambridge qualifications often gives students admission to the world's best universities
						- in the US, the UK, Australia, Canada, Germany and beyond.
					</p>
					<p>
						From the 1930s to the 1980s, the size of the city was increased by several large council estates.
						The biggest impact has been on the area north of the river, which are now the estates of East Chesterton,
						King's Hedges, and Arbury where Archbishop Rowan Williams lived and worked as an assistant priest in the early 1980s.

					</p>
				</div>
			</div>
		</div>

		<div id="footer">� Cambridge 2020</div>
	</div>
</body>

</html>