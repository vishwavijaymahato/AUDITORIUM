<?php

$userlogin=$_SESSION['uid'];
if($userlogin==true)
{
	
}
else
{
	header("Location: http://uttamrajak.me/auditorium/login.php");

	//header('location:login.php');
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		.contact img{
    width: 100%;
    border-radius: 50%;
}
     hr.socket{
     	width: 100%;
     	border-top: .2rem solid #666b71;
     	margin-top: 3rem;


     }
    

		

	</style>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>profile</title>
	
	<link rel="stylesheet" href="style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<body>
	<div class="jumbotron">
			<div class="col-12 text-center">
				<h3 class="heading">CONTACT</h3>
				<div class="heading-underline"></div>
			</div>
			<div class="row">
				<div class="col-md-6 contact">
					<div class="row">
						<div class="col-md-4">
							<img src="image/nik.jpg">

						</div>
						<div class="col-md-8">
							<h3>NIKHIL JAISWAL</h3>
							<h4>B.Sc IT</h4>
							<h4>KARIM CITY COLLEGE</h4>
							<h5>PHONE:9304101544</h5>
							<h5>Email:nikjais15725@gmail.com</h5>
							<a href="https://www.facebook.com/nikhil.jaiswal.9615" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
							<a href="https://www.instagram.com/nikjais15725" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
							<a href="https://twitter.com/Nikhilj69321990" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
							<a href="https://www.linkedin.com/in/nikhil-jaiswal-6414b917a" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>

						</div>

					</div>

				</div>
				<div class="col-md-6 contact">
					<div class="row">
						<div class="col-md-4">
							<img src="image/vj.jpg">

						</div>
						<div class="col-md-8">
							<h3>VISHWA VIJAY MAHATO</h3>
							<h4>B.Sc IT</h4>
							<h4>KARIM CITY COLLEGE</h4>
							<h5>PHONE:8409588442</h5>
							<h5>Email:vvmahato21@gmail.com</h5>
							<a href="https://www.facebook.com/vj1797" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
							<a href="https://www.instagram.com/vishwa_vi_jay" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
							<a href="https://twitter.com/vishwa_vi_jay" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
							<a href="https://www.linkedin.com/in/vishwa-vijay-mahato" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>

						</div>

					</div>
				</div>


			</div>
			<center>
	<hr class="socket">
		&copy;Auditorium Management System
		</center>
	</div>

</body>
</html>