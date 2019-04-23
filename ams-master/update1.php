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
$c=1;
//$db1=mysqli_connect("localhost","root","","auditorium");
$db1=mysqli_connect("localhost","nikhil","nik123","Auditorium");
?>
		
		
			
		 
<!DOCTYPE html>
<html lang="en">
<head>

	 <script type="text/javascript">
	function show()
	{
		var x =document.getElementById("s1");
		if (x.type==="password")
		{
			x.type="text";
		}
		else
		{
			x.type="password";
		}
	}
	function show1()
	{
		var x =document.getElementById("s2");
		if (x.type==="password")
		{
			x.type="text";
		}
		else
		{
			x.type="password";
		}
	}
	</script>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>profile</title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Lato:400,700');

		.btn-secondary{
  color: white;
  background-color: #1ebba3;
  border-color: #1ebba3;
}

.btn-secondary:hover{
  background-color: #1ebba3;
  border-color: #1ebba3;
}
.admin svg.svg-inline--fa{
	color:#1ebba3;
}
.btn-info{
	color: white;
  background-color: #1ebba3;
  border-color: #1ebba3;
}
.btn-info:hover{
  background-color: #1ebba3;
  border-color: #1ebba3;
}
	</style>
	<style>
	th
	{
		background-color:;
		color:white;
	}
	td
	{
		
		color:white;
	}
	body{
		font-family:'Lato',sans-serif;
  color: #505962;
  text-transform: uppercase;
	}
	
	</style>


</head>
<body>
	<div class="jumbotron">
		<div class="narrow text-center">
			<div class="col-12">
				<h3 class="heading">ADMIN PANEL</h3>
				<div class="heading-underline"></div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="admin">
					<i class="fas fa-users fa-5x" data-fa-transform="shrink-3 up-5"></i>
					<center>
					<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#suser"> USERS DETAILS </button>
				</center>
			</div>



				</div>
				<div class="col-md-4">
					<div class="admin">
					<i class="fas fa-plus-square fa-5x" data-fa-transform="shrink-3 up-5"></i>
					<center>
					<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#audi1" style="width: 117px">ADD AUDITORIUM</button>
				</center>
			</div>
				</div>
				<div class="col-md-4">
					<div class="admin">
					<i class="fas fa-trash-alt fa-5x" data-fa-transform="shrink-3 up-5"></i>
					<center>

					<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#deleteaudi" style="width: 117px">DELETE AUDITORIUM</button>
				</center>
			</div>
				</div>
			</div>
		</div>
				<div class="col-12">
				<div class="row text-center">
				
				<div class="col-md-4">
					<div class="admin">
					<i class="fas fa-edit fa-5x" data-fa-transform="shrink-3 up-5"></i>
					<center>
					<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#updateprice"> UPDATE PRICE </button>
					</center>
				</div>
				</div>
				<div class="col-md-4">
					<div class="admin">
					<i class="fas fa-info-circle fa-5x" data-fa-transform="shrink-3 up-5"></i>
					<center>
					<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#bookd" style="width: 100px"> BOOKING DETAILS </button>
				</center>
			</div>
				</div>
				<div class="col-md-4">
					<div class="admin">
					<i class="fas fa-search fa-5x" data-fa-transform="shrink-3 up-5"></i>
					<center>
					<button class='btn btn-secondary badge-pill' data-toggle="modal" data-target="#search"> SEARCH </button>
				</center>
			</div>
				</div>
			</div>
		</div>
	</div>




	<!--ADD AUDITORIUM MODEL-->
<?php
	
	if(isset($_POST["audi"]))
{


$aname1=$_POST["aname"];
$aseat1=$_POST["aseat"];
$aprice1=$_POST["aprice"];
$add1=$_POST["add"];
$sql="select * from audi_details";
	$res= mysqli_query($db1,$sql);
	while($row=mysqli_fetch_assoc($res))
	{ $c=$c+1;}
    
	 $aid="IAMS".(string)$c;
	
$sql1="INSERT INTO `audi_details`(`audi_id`,`audi_name`,`seats`,`price`,`address`) VALUES ('".$aid."','".$aname1."','".$aseat1."','".$aprice1."','".$add1."')";
mysqli_query($db1,$sql1);
	echo "<script> alert('audi details created successfully');
			window.location='home.php';</script>";




}


?>

 <!-- pop window for course-->
  
	<div class="modal fade" id="audi1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <center><h3 class="text-primary"><u>ADD NEW AUDITORIUM</u></h3></center>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
        </div>
		
		<div class="modal-body">
		<div class="">	
		    <form  method="POST" action=""  class="form-horizontal">
			<div class="form-group">
			<label class="control-label">AUDITORIUM</label>
			<div class="">
			<input type="text" class="form-control" name="aname"  placeholder="Please Enter Auditorium name" required>
			</div>
			</div>			
			<div class="form-group">
			<label class="control-label">SEATS</label>
			<div class="">
			<input type="text" class="form-control" name="aseat"  placeholder="Please Enter how many  seats" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">PRICE</label>
			<div class="">
			<input type="text" class="form-control" name="aprice"  placeholder="Please Enter Auditorium price" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label">ADDRESS</label>
			<div class="">
			<input type="text" class="form-control" name="add"  placeholder="Please Enter Address" required>
			</div>
			</div>
			
			<div class="form-group">
			<div class=""></div>
			<div class="">
			<input type="submit" name="audi" value="SUBMIT" class="btn btn-success"> <input type="reset" name="reset" value="RESET" class="btn btn-danger"> 
			</div>	
			</div>	
			</form>					
                </div>
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="CLOSE" onclick="window.location.reload();">
        </div>
      </div>      
    </div>
  </div>
  

  <!--DELETE AUDITORIUM-->
  <?php 
		if(isset($_POST["del1"]))	
		{
			$audid=$_POST['audid'];
			$sql1="delete from audi_details where audi_name='".$audid."'";
			$result1=mysqli_query($db1,$sql1);
			header('location:update1.php');
		}
		?>

  <script>
	function delt()
	{
		if (confirm("YOU WANT TO DELETE AUDITORIUM?"))
		{
          return true;
          alert("AUDITORIUM DELETE SUCCESSFULLY")
		}
		else
		{
			alert('SORRY');
			return false;
		}
	}  
	</script>
 

  <div class="modal fade" id="deleteaudi" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <center><h4 class="text-primary"><u>DELETE AUDITORIUM</u></h4></center>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
        </div>
		
		<div class="modal-body">
			<form action="" method="post" class="form-horizontal" onsubmit="return delt()">
				<div class="form-group">
					<center>
				<label class="control-label">
			SELECT AUDITORIUM
				</label>
				</center>
				<div class="">
					<center>
			<select name="audid">
				<?php
									$conn=mysqli_connect("localhost","root","","Auditorium");
					
									$sql="select * from audi_details";
									$res= mysqli_query($db1,$sql);
									while($row=mysqli_fetch_assoc($res))
									{
										echo'<option>'.$row["audi_name"].'</option>';
									}
								?>
			</select>
			</center>
		</div>
		</div>
		<div>
			<center>
			<input type="submit" value="DELETE" class="btn btn-info" name="del1" >
			</center>
		</div>
		</form>

		</div>
		<div class="modal-footer" >
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="close" onclick="window.location.reload();">
        </div>
      </div>      
    </div>
  </div>


 
 <!--show user   -->
 <div class="modal fade" id="suser" role="dialog">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <center><h3 class="text-primary">USER</h3></center>
		  <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
          
        </div>
		
		<div class="modal-body">
		<div class="container">
		<div class="jumbotron">
			<div class="card-body">
				<h5 class="card-title" style="color:black">USER DETAILS</h5>
				
				<table class="table table-dark table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">USER ID</th>
      <th scope="col">USER TYPE</th>
      <th class="text-right">USERNAME</th>
 
     
    </tr>
  </thead>
  <tbody>
  	<?php 
  		
			$sql2="select * from login";
				$result2=mysqli_query($db1,$sql2);
  		   while($row=mysqli_fetch_array($result2))
  		   	
	{
		echo"<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td class='text-right'>$row[2]</td>
		


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

<!--booking details   -->
 <div class="modal fade" id="bookd" role="dialog" style="width:100%;">
    <div class="modal-dialog" >
      <div class="modal-content" style="width:200%;margin-left:-50%;">
        <div class="modal-header">
          <center><h3 class="text-primary">user</h3></center>
		  <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
          
        </div>
		
		<div class="modal-body">	
		    
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
	
			$sql5="select * from booking";
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
  
  <!--UPDATE PRICE-->
<?php
 
if(isset($_POST["update"]))
{
	
$audinm=$_POST["audid"];
$newprice=$_POST["price"];

    //$my1=mysqli_connect("localhost","root","","auditorium");
	$my1=mysqli_connect("localhost","nikhil","nik123","auditorium");

$sq1="update audi_details set price='".$newprice."' where audi_name='".$audinm."'";
$rse=mysqli_query($my1,$sq1);

}
?>

  <script>
	function delt1()
	{
		if (confirm("Are you sure Update Price?"))
		{
          return true;
		}
		else
		{
			alert('sorry');
			return false;
		}
	}  
	</script>

  <div class="modal fade" id="updateprice" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <center><h4 class="text-primary"><u>UPDATE PRICE </u></h4></center>
          <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
        </div>
		
		<div class="modal-body">
			<form action="" method="post" class="form-horizontal" onsubmit="return delt1()">
				<div class="form-group">
					<center>
				<label class="control-label">
			SELECT AUDITORIUM
				</label>
				</center>
				<div class="">
					<center>
			<select name="audid">
				<?php
									//$conn=mysqli_connect("localhost","root","","Auditorium");
									$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
	
									$sql="select * from audi_details";
									$res= mysqli_query($db1,$sql);
									while($row=mysqli_fetch_assoc($res))
									{
										echo'<option>'.$row["audi_name"].'</option>';
									}
								?>
			</select>
			</center>
		</div>
		</div>
		<div class="form-group">
			<center>
			<label class="control-label">
			 NEW PRICE 
			</label>
			</center>
			<div>
				<center>
			<input type="text" name="price">
			</center>
		</div>
		</div>
		<div>
			<center>
			<input type="submit" value="UPDATE PRICE" class="btn-info" name="update" >
		</center>
		</div>
		</form>

		</div>
		<div class="modal-footer" >
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="close" onclick="window.location.reload();">
        </div>
      </div>      
    </div>
  </div>

<!--booking details by search  -->
 <div class="modal fade" id="search" role="dialog" style="width:100%;">
    <div class="modal-dialog" >
      <div class="modal-content" style="width:200%;margin-left:-50%;">
        <div class="modal-header">
          <center><h3 class="text-primary">user</h3></center>
		  <button type="button" class="close" data-dismiss="modal" onclick="window.location.reload();">&times;</button>
          
        </div>
		<form method="post" action="">
		<div>
		<label>search by booking_id:-</label>
		<input type="text" name="n1" placeholder="enter auditorium id">&nbsp;&nbsp;&nbsp;<input type="submit" name="bs" value="search">
		</div>
		<div style="padding-top:20px;">
		<form method="post" action="">
		<label>search by date:-</label>

		<input type="date" name="n2" >&nbsp;&nbsp;&nbsp;<input type="submit" name="ds" value="search">
		</form>
		</div>
		
		
		
		</form>
		<div class="modal-body">	
		    
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
	if(isset($_POST['bs']))
	{
			$aid=$_POST['n1'];
  			//$conn1=mysqli_connect("localhost","root","","auditorium");
			$conn1=mysqli_connect("localhost","nikhil","nik123","auditorium");
	
			$sql5="select * from booking where bid='$aid'";
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

	}
?>
</tbody>
<tbody>
  	<?php 
	if(isset($_POST['ds']))
	{
			$dat=$_POST['n2'];
  			//$conn1=mysqli_connect("localhost","root","","auditorium");
			$conn1=mysqli_connect("localhost","nikhil","nik123","auditorium");
	
			$sql5="select * from booking where bdate='$dat'";
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
