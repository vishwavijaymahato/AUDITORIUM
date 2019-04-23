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
	$linkk=mysqli_connect("localhost","nikhil","nik123","auditorium");
	//$linkk=mysqli_connect("localhost","root","","auditorium");
	$sql="select * from audi_details";
	$result=mysqli_query($linkk,$sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>







	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>AUDITORIUM LIST</title>
	
	<link rel="stylesheet" href="style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="card-body">
				<h5 class="card-title" style="color:black">SELECT AUDITORIUM OF YOUR CHOICE</h5>
				
				<table class="table table-dark table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">AUDITOURIUM ID</th>
      <th scope="col">NAME</th>
      <th scope="col">LOCATION</th>
      <th scope="col">CAPACITY</th>
      <th scope="col">PRICE</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  			$i=1;
  		   while($row=mysqli_fetch_array($result))
  		   	
	{
		echo"<tr>
		<td> $i</td>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[4]</td>
		<td>$row[2]</td>
		<td class='text-right'>$row[3]</td>



		</tr>";
		$i=$i+1;
	}


?>
</tbody>
</table>

			</div>
		</div>
	</div>
</body>
</html>