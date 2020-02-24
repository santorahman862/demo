<!DOCTYPE html>
<html>
<head>
	<title>log in page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<div class="n">
	<h1><marquee> National Institute of Engineering & Technology (NIET)</marquee></h1>
	</div>
	<div class="row1">
	<div class="st">
			<h2>student login form</h2>
			</div>
			<div class="ad">
	<h2>admin login form</h2>
	</div>
	</div>
		<div class="rowm">
			
	<div class="login">
		<form action="wellcome.php" method="POST">
		
		<div class="in"><input type="text" name="username" placeholder="Email or Username" required=""></div>
		<div class="in"><input type="password" name="pwd" placeholder="password" required=""></div>

		<div class="out"><input type="submit"value="signup"></div>
		</form>
		<div class="re">
		<p>creat new account ?.. <a href="reg.php"> sign up</a> here.</p>
		</div>
	</div>
	
	
	
	<form>
		<div class="log">
		
		<div class="in1"><input type="text" name="username" placeholder="Email or Username" required=""></div>
		<div class="in1"><input type="password" name="pwd" placeholder="password" required=""></div>

		<div class="out1"><input type="submit"value="signup"></div>
		
	</div>
	</form>

</div><br><br>
<hr>
	<footer >
		<div class="footer">
		<p>Copyright &copy- 2019 - <?= date('Y') ?> All Rights Reserved.</p>
		</div>
	</footer>
	

</body>
</html>