<!DOCTYPE html>
<html>
<head>
	<title>wellcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<pre>
	 <?php 
	$_SUBMIT = $_FILES ["photo"];

	 echo var_dump( $_SUBMIT);


	  ?>
	  </pre>
	<div class="w">
	<h1><marquee> wellcome to student database. !!!</marquee></h1>
	</div>
	<div class="result">
		<h1>result</h1>
	</div>
		
		<div class="resu">
	<form action="" method="POST">
		<div class="res"><input type="text" name="ROLL" placeholder="Enter Roll" required="roll"></div>
		<div class="res"><input type="password" name="pwd" placeholder="password" required="password"></div>
		<div class="res1"><input type="submit" value="go" ></div>
		</form>
	</div>
	


</body>
</html>