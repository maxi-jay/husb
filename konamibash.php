<?php

session_start();
require ('guest.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>konami bash</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-mid-2">
			<!-- <h1>CONTACT US</h1>
			 -->
			 <h1 align="center">KONAMI BASH</h1>
			 <h2 align="center">Sign up to attend my birthday bash.</h2>
			 <h2 align="center"><a href="#" title="">View Others who signed up</a></h2>


			<div class="col-mid-10" border='1px solid blue'>
			<form action="bday.php" method="post" accept-charset="utf-8">
				
				<div class="form-group"><label align='center'>Name</label> </div>
				<div class="form-group"><input type="text" name="name" placeholder="Your name" class="form-control"></div>

				<div class="form-group"><label align='center' >Address</label></div>
				<div class="form-group"><textarea name="addy" placeholder="Your Address" class="form-control"></textarea></div>

				<div class="form-group"><label align='center'>Phonenumber</label></div>
				<div class="form-group"><input type="text" name="phone" placeholder="Your number" class="form-control"></div>

				<div class="form-group"><label>Email</label></div>
				<div class="form-group"><input type="email" name="email" placeholder="Your mail" class="form-control" ></div>

				<div class="form-group"><label>Gender</label></div>
				<div class="form-group"><input type="radio" name="gender" value="male" placeholder=""><span> </span><label>Male</label><span> </span><input type="radio" name="gender" value="female" placeholder=""><span> </span><label>Female</label></div>

				<div class="form-group"><label>Gift</label></div>
				<div class="form-group">
					<input type="checkbox" name="gifts[]" value=""><span> </span>
					<label>Car</label>
					<input type="checkbox" name="gifts[]" value=""><span> </span>
					<label>Blender</label>
					<input type="checkbox" name="gifts[]" value=""><span> </span>
					<label>Shoe</label>
					<input type="checkbox" name="gifts[]" value=""><span> </span>
					<label>Cloth</label>
					<input type="checkbox" name="gifts" value=""><span> </span>
					<label>Cash</label>
				</div>


				
				<div class="form-group">
					
					<select name="state">
						<?php


						$state=$g->getstae();
						foreach($state as $s){

						$statename=$s['state_name'];
						$stateid=$s

					}

						?>
						
					</select>

				</div>


				<button type="submit" class="btn btn-primary" name="submit" >submit</button>
				
			</form>
				
		</div>		
	</div>

</body>
</html>