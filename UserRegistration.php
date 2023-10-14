<?php
require_once ('Connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>User Registration</title>
</head>
<body>
	<div>
		<form action="index.php" method="post">
			<div class="container">
				<h1>User Registration Form</h1>
					<div class="col-sm-3">
                        <hr class="mb-3">
						
						<label for="First_Name"><b>First Name</b></label>
						<input  class="form-control" type="text" name="First_Name" required>

						<label for="Last_Name"><b>Last Name</b></label>
						<input class="form-control" type="text" name="Last_Name" required>

						<label for="Email_Address"><b>Email Address</b></label>
						<input class="form-control" type="email" name="Email_Address" required>

						<label for="Password"><b>Password</b></label>
						<input class="form-control" type="password" name="Password" required>

						<hr class="mb-3">
						<input type="submit" name="submit" value="Sign Up">
				 </div>
			</div>	
		</form>
	</div>        
</body>
</html>
