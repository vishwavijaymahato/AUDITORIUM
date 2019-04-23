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
<?php
	$myuser=$_SESSION["uid"];
	
	//$my1=mysqli_connect("localhost","root","","auditorium");
	$my1=mysqli_connect("localhost","nikhil","nik123","auditorium");
	$sq="select * from login where userid='".$myuser."'";
	$rse=mysqli_query($my1,$sq);
	$row=mysqli_fetch_array($rse);

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Lato:400,700');
	body{
		font-family:'Lato',sans-serif;
  color: #505962;
	}
		.btn-secondary{
  color: white;
  background-color: #1ebba3;
  border-color: #1ebba3;
}

.btn-secondary:hover{
  background-color: #1ebba3;
  border-color: #1ebba3;
}



  .heading{
  font-size: 1.9rem;
  font-weight: 700;

}

.heading-underline{
	width:3rem;
	height: .2rem;
	background-color: #1ebba3;
	margin:0 auto 2rem;


}
.profile svg.svg-inline--fa{
	color:#1ebba3;
}
body{
	text-transform: uppercase;
}
	</style>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>profile</title>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<body>

<div class="jumbotron">
<div class="narrow text-center">
	<div class="col-12">
		<h3 class="heading">WELCOME</h3>
		<div class="heading-underline"></div>
		<h4><?php echo $row[2] ?></h4>
	</div>
	<div class="row text-center">

		<div class="col-md-3">
			
			<div class="profile">
				<i class="far fa-eye fa-5x" data-fa-transform="shrink-3 up-5"></i>
				<center>
				
					<button  class='btn btn-secondary badge-pill'  data-toggle="modal" data-target="#prof">VIEW PROFILE</button>
				</center>
			</div>

		</div>
		<div class="col-md-3">
			<div class="profile">
				<i class="fas fa-user-edit fa-5x" data-fa-transform="shrink-3 up-5"></i>
				<center>
				<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#update"> EDIT PROFILE </button>
				</center>
			</div>
		</div>
		<div class="col-md-3">
			<div class="profile">
				<i class="fas fa-info-circle fa-5x" data-fa-transform="shrink-3 up-5"></i>
				<center>
				<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#booking" style="width:100px"> BOOKING DETAILS </button>
				</center>
			</div>
		</div>
		<div class="col-md-3">
			<div class="profile">
				<i class="fas fa-sign-out-alt fa-5x" data-fa-transform="shrink-3 up-5"></i>
				<center>
				<a   href="logout.php" class="btn btn-link"  onclick="return confirm('you want to logout?');">
   <button class='btn btn-secondary badge-pill'> LOGOUT </button></a>
				</center>
			</div>
		</div>
	</div>

</div>
</div>

<!--EDIT PROFILE-->
<div class="modal fade" id="update" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <center><h3 class="text-primary">EDIT PROFILE</h3></center>
		  <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
          
        </div>
		
		<div class="modal-body">	
		    <form  method="POST" action=""  class="form-horizontal">
		    <div class="form-group">
			<label class="control-label">USERID </label>
			<div class="" >
			<input type="text" class="form-control" name="a" value="<?php echo $_SESSION['uid'] ?>" readonly>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">USERNAME </label>
			<div class="" >
			<input type="text" class="form-control" name="b" value="<?php echo $row[2]; ?>">
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">EMAIL </label>
			<div class="" >
			<input type="email" class="form-control" name="c" value="<?php echo $row[3];?>" >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">PASSWORD </label>
			<div class="">
			<input type="text" class="form-control" name="d" value="<?php echo $row[4]; ?>" >
	
			</div>
			</div>	
			
			<div class="form-group">
			<div class=""></div>
			<div class="">
				<center>
				<input type="submit"  value="UPDATE" name="edit" class="btn btn-info" class="but" onclick="return my();">
							</div>	
				</center>
			</div>	
			</form>					
               
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-info" data-dismiss="modal" value="CLOSE" onclick="window.location.reload();">
        </div>
      </div>      
    </div>
  </div>





<!--popup profile-->
	
	<div class="modal fade" id="prof" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <center><h3 class="text-primary">profile</h3></center>
		  <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
          
        </div>
		
		<div class="modal-body">	
		    <form  method="POST" action=""  class="form-horizontal">
		    <div class="form-group">
			<label class="control-label">userid </label>
			<div class="" >
			<input type="text" class="form-control" name="a" value="<?php echo $_SESSION['uid'] ?>" readonly>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">username </label>
			<div class="" >
			<input type="text" class="form-control" name="b" value="<?php echo $row[2]; ?>" readonly>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">Email </label>
			<div class="" >
			<input type="email" class="form-control" name="c" value="<?php echo $row[3];?>" readonly >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">Password </label>
			<div class="">
			<input type="text" class="form-control" name="d" value="<?php echo $row[4]; ?>" readonly >
	
			</div>
			</div>	
			
				
			</form>					
               
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-info" data-dismiss="modal" value="close" onclick="window.location.reload();">
        </div>
      </div>      
    </div>
  </div>
  
<!--booking details-->
	
	<div class="modal fade" id="booking" role="dialog">
    <div class="modal-dialog"style="width:75%;">
      <div class="modal-content" style="background-color: #45B39D;width:200%;margin-left:-50%;">
        <div class="modal-header">
          <center><h3 class="text-primary">booking details</h3></center>
		  <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
          
        </div>
		
		<div class="modal-body" >
		<div class="container">
		<div class="jumbotron">
			<div class="card-body">
				<h5 class="card-title" style="color:black">BOOKING DETAILS</h5>
				
				<table class="table table-dark table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">USERNAME</th>
      <th scope="col">Book_DATE</th>
      <th scope="col">booking ID</th>
      <th scope="col">auditorium id</th>
      <th scope="col">SEATS</th>
      <th scope="col">PRICE</th>
      <th scope="col">09:00-12:00</th>
      <th scope="col">12:30-03:30</th>
      <th scope="col">16:00-19:00</th>
	  <th scope="col">19:30-22:30</th>
	  <th scope="col">Payment</th>
      <th scope="text-right">date</th>
     
     
    </tr>
  </thead>
  <tbody>
  	<?php 
  			//$conn1=mysqli_connect("localhost","root","","auditorium");
			$conn1=mysqli_connect("localhost","nikhil","nik123","auditorium");
	
			$sql5="select * from booking where uid='$myuser'";
			$result5=mysqli_query($conn1,$sql5);
  		   while($row1=mysqli_fetch_array($result5))
  		   	
	{
		echo"<tr>
		<td>$row1[2]</td>
		<td>$row1[11]</td>
		<td>$row1[0]</td>
		<td>$row1[7]</td>
		<td>$row1[8]</td>
		<td>$row1[10]</td>
		<td>$row1[12]</td>
		<td>$row1[13]</td>
		<td>$row1[14]</td>
		<td>$row1[15]</td>
		<td>$row1[16]</td>
		<td>$row1[17]</td>
		


		</tr>";
	
	}


?>
</tbody>
</table>

			</div>
		</div>
	</div>		
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-info" data-dismiss="modal" value="close" onclick="window.location.reload();">
        </div>
      </div>      
    </div>
  </div>

</body>
</html>
<?php
 
if(isset($_POST["edit"]))
{
	
$myuser1=$_POST["a"];
$myname=$_POST["b"];
$myemail=$_POST["c"];
$mypass=$_POST["d"];

    //$my1=mysqli_connect("localhost","root","","auditorium");
	$my1=mysqli_connect("localhost","nikhil","nik123","auditorium");

$sq1="update login set username='".$myname."',email='".$myemail."',password='".$mypass."',cpassword='".$mypass."' where userid='".$myuser1."'";
$rse=mysqli_query($my1,$sq1);

}
?>
