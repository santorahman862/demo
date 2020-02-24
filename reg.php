<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	require_once("db_conn.php"); 


	 ?>
	<?php 
	if (isset($_REQUEST["signup"])) {
	$name = $_REQUEST["name"];
	$roll = $_REQUEST["roll"];
	$email = $_REQUEST["email"];
	$pwd = $_REQUEST["pwd"];
	$c_pwd = $_REQUEST["c_pwd"];
	
	$photo = $_FILES["photo"]['name'];
	
	echo "$photo";
	}
	if (empty($roll)) {
		$input_error['roll'] = "the name field is required";
	}

	 ?>
	<div class="st1">
		<h1><marquee>student registration form </marquee></h1>
	</div>
	<form action="" method="POST" enctype="multipart/form-data">
	<div class="r">
	<div class="ureg">
		<div class="regss"><h2>signup form</h2></div>
		<div class="regs"><input type="text" name="name" placeholder="  Name" required="" value="<?php if(isset($name)){ echo($name); }?>"></div>
		<div class="regs"><input type="text" name="roll" placeholder=" Roll" required="" ></div>
		<label ><?php if (isset($input_error['roll'])) {
			echo($input_error['roll']);
		} ?> </label>
		<div class="regs"><input type="Email" name="email" placeholder="Email or Username" required=""></div>
		<div class="regs"><input type="Password" name="pwd" placeholder="Password" required=""></div>
		<div class="regs"><input type="Password" name="pwd" placeholder="Confirm Password" required=""></div>
	<div class="file"> 
		<div class="regs">
			<label style="color: white;text-transform: uppercase;font-family:serif;">semister :</label>
			<select name="semister" required="">
				<option>select</option>
				<option>1st</option>
				<option>2nd</option>
				<option>3rd</option>
				<option>4th</option>
				<option>5th</option>
				<option>6th</option>
				<option>7th</option>
				<option>8th</option>
			</select>
		</div>
		<div class="regs">

			<label style="color: white;text-transform: uppercase;font-family:serif;">department :</label>
			
			<select name="department" id="semister" class="form-control form-control-sm" required>
				<option>select</option>
				<option>computer</option>
				<option>electrical</option>
				<option>mechanical</option>
				<option>textile</option>
				<option>civil</option>
				<option>marine</option>
				<option>gdpm</option>
				<option>automobile</option>
			</select>
		</div>
		<input type="file" name="photo" required="">
	</div>
	<div class="signup-btn">
		
	<!-- <input type="submit" value="signup" name="signup" > -->
	<button type='submit'>Signup</button>
	</div>
		
	</div>
	</div>
	</form>

</body>
</html>