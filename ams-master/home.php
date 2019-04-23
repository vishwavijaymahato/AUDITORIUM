
<?php
session_start();
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
	
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1">
	<title>HOMEPAGE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<!---- Start home section -->
<div id="home">
<!----- NAVIGATION -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="#"><img src="img/"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#home">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#audilist">AUDITORIUM LIST</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#bookingform">BOOKING FORM</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="#profile">PROFILE</a>
			</li>
			
			<?php
			$userty=$_SESSION['utype'];
			if($userty=="admin")	
			{	
		
			echo '<li class="nav-item">
				<a class="nav-link"  href="#admin" >admin panel</a>
			</li>';
			}
			?>
			<li class="nav-item">
				<a class="nav-link" href="#contact">contact</a>
			</li>
		</ul>
	</div>
</nav>
<!--- END NAVIGATION -->

<!--- Start Landing Page Section-->
<div class="landing"  >
	<div class="home-warp">
		<div class="home-inner">
		</div>
	</div>
</div>

<div class="caption text-center">
	<h1>AUDITORIUM MANAGEMENT SYSTEM</h1>
	<h3>ONE PLACE TO BOOK ALL AUDITORIUM</h3>
	<a class="btn btn-outline-light btn-lg" href="#bookingform">BOOK</a>
</div>


<!--- End Landing page section -->

</div>
<!--End home section-->

<!---- Start audi list section -->
<div id="audilist" class="offsets">
	<?php
	include('audilist.php');
	?>

</div>
<!--End audi list section-->


<!---- Start booking section -->
<div id="bookingform" class="offsets">
	<?php
	include('booking.php');
	?>	
			
</div>

<!--End booking section-->



<!---- Start profile section -->
<div id="profile" class="offsets">
		<?php
	include('profile1.php');
	?>
</div>

<!--End profile section-->
<!---- Start admin panel section -->
<div id="admin" class="offsets" style="display:none;">
				<?php 
				include('update1.php');
				?>
</div>
<!--End admin panel section-->

<!---- Start CONTACT section -->
<footer>
<div id="contact" class="offsets">
				<?php 
				include('contact.php');
				?>

</div>
</footer>
<!--End CONTACT section-->


	<?php
	$userty=$_SESSION['utype'];
	if($userty=="admin")	
	{	
		echo "<script>document.getElementById('admin').style.display='block';</script>";
	}

	?>




	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.jss"></script>
	<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
<html>

