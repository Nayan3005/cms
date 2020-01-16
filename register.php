<!DOCTYPE html>

<?php
	session_start();
	include('config.php');
	
	if (isset($_POST['reg_user']))
	{
		echo "Hello";
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pass = mysqli_real_escape_string($db, $_POST['pass']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		
		echo $name;
		
		$query = "INSERT INTO client (name, email, pass, phone, address) 
  			  VALUES('$name', '$email', '$pass', '$phone', '$address')";
		if(mysqli_query($db, $query))
		{
			header('location: index.php');
		}
		else
		{
			$message = "Unsuccessful registration";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
	}
?>


<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Client Registration</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12">
						<form method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" value="" name="name" />
                            </div>
							<div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" name="email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number *" value="" name="phone" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" value="" name="pass" />
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" placeholder="Address *" value="" name="address" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="reg_user" class="btnSubmit">Submit</button>
						</form>
                </div>
            </div>
        </div>


</body>
</html>