<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>	Sign In Page</title>
		<link rel="stylesheet" type="text/css" href="css_files/signin.css"/>
	</head>
	<body>
		<img class="backgroundimg"src="images/books.jpeg"/>
		<a class=inkscreen>Ink Screen</a>
		<header>
			<nav class=nav_bar>
				<a href="#home" class=nav_item> DISCOVER</a>
				
				<a href="#home" class=nav_item> CREATE </a>
				
				<a href="#home" class=nav_item> BOOKS</a>

			</nav>
		</header>

		<div class="signin-box" >
			
			<h1>Sign Up</h1>
			<hr>
			<form action="process_signin.php" method="post">
			<input type="text" name="username" placeholder="Enter Username" maxlength="10" size="30"/><br>
			<input type="text" name="email" placeholder="Enter Email"  size="30"/><br>
			<input type="text" name="phone_no" placeholder="Enter Phone Number"  size=""/><br>	
			<input type="password" name="password" placeholder="Enter Password"  size=""/><br>
			<input type="password" name="confirm_password" placeholder="Confirm Password"  size=""/><br>
					
			
			<p class="birthday">Birthday</p>
			<div>
				<select class="month" name="month">
					<option style="color:grey">Month</option>
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
				</select>
				<select class="day" name="day">
					<option style="color:grey">Day</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select>
				<select class="year" name="year">
					<option style="color:grey">Year</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
					<option>2008</option>
				</select>
			</div>
			<input type="submit" name="submit" value="Sign Up"/>
			<br>
			<!--
			<a href="a">Forget Password?</a>
			-->
			</form>
		</div>
		<!--
		<ul class="footer">
				<li class="about">About</li>
				<li class="contact">Contact</li>
				<li class="services">Services</li>
				<li class="policy">Policy</li>
		</ul>
		-->
	</body>
</html>
