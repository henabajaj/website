<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>	Log In Page</title>
		<link rel="stylesheet" type="text/css" href="css_files/login.css"/>

	</head>
	<body>
		<img class="backgroundimg"src="images/books.jpeg"/>
		
		<header>
			<a class=inkscreen>Ink Screen</a>
			<nav class=nav_bar>
				<a href="#home" class=nav_item> DISCOVER</a>
				
				<a href="#home" class=nav_item> CREATE </a>
				
				<a href="#home" class=nav_item> BOOKS</a>

			</nav>
		</header>

		<div class="login-box" >
			
			<h1>Log In</h1>
			<hr>
			<form action="process_login.php" method="post">
			<input type="text" name="username" placeholder="Enter Username"  size="30"/><br>
			<input type="password" name="password" placeholder="Enter Password"  size=""/><br>
			<input type="submit" name="submit" value="Login"/>
			<br>
			<a href="a">Forget Password?</a>
                <a href="signin.php">Sign Up</a>
			</form>
			
		</div>
		<ul class="footer">
				<li class="about">About</li>
				<li class="contact">Contact</li>
				<li class="services">Services</li>
				<li class="policy">Policy</li>
			</ul>
	</body>
	
</html>
