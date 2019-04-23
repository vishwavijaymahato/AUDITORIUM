<?php include('log1.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: #34495e;
	background-image: url(image/home12.jpg);

}


.box{
	width: 400px;
	padding: 40px;
	top: 50%;
	position: absolute;
	left: 50%;
	transform: translate(-50%,-50%);
	background: #191919;
	text-align: center;

}

.box h1{
	color: white;
	text-transform: uppercase;
	font-weight: 500;
}

.box input[type="text"],.box input[type="password"]
{
	border:0;
	background: none;
	display: block;
	margin:20px auto;
	text-align: center;
	border : 2px solid #3498db;
	padding: 14px 10px;
	width:200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;

}

.box input[type="text"]:focus,.box input[type="password"]:focus{
	width: 250px;
	border-color: #2ecc71;

}
.box input[type="submit"]
{
	border:0;
	background: none;
	display: block;
	margin:20px auto;
	text-align: center;
	border : 2px solid #2ecc71;
	padding: 14px 40px;

	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;

}

.box input[type="submit"]:hover
{
	background: #2ecc71;

}

.box select{
	border:0;
	background: none;
	display: block;
	margin:20px auto;
	text-align: center;
	border : 2px solid #3498db;
	padding: 14px 10px;
	width:200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;

}
.box select:focus{
	width: 250px;
	border-color: #2ecc71;


}

option{
	color: black;


}
.box a[type="button"]
{
	border:0;
	background: none;
	display: block;
	margin:20px auto;
	text-align: center;
	border : 2px solid #3498db;
	padding: 14px 10px;
	width:200px;
	outline: none;
	color: white;
	background-color: #1ebba3;
	border-radius: 24px;
	transition: 0.25s;

}

	</style>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>LOGIN</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
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
	

</head>
<body>
	<form class="box" action="" method="post">
		<h1>Login</h1>
		
			<select name="u1" id="b">
				<option>User type</option>
				<option>User</option>
				<option>Admin</option>
			</select>
		<input type="text" name="u2" placeholder="Username">
		<input type="password" name="u3" placeholder="Password">
		<input type="submit" name="sub" value="Login">
		<a type="button" class="btn btn-info" data-toggle="modal" data-target="#signup" >Register</a>

		<span style="color:white;"><?php echo $message;?></span>



	</form>


	<!--popup start-->
	
	<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" id="pic">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="text-primary">User Register</h3></center>
        </div>
		
		<div class="modal-body">	
		    <form  method="POST" action="login.php"  class="form-horizontal">

			<div class="form-group">
			<label class="control-label col-md-3">username </label>
			<div class="col-md-9" >
			<input type="text" class="form-control" name="user"  placeholder="enter username" required >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Email </label>
			<div class="col-md-9" >
			<input type="email" class="form-control" name="email"  placeholder="Please Enter Your email" required >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Password </label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="pass"  placeholder="Please Enter Your password" required id="s1">
			<input type="checkbox" onclick="show()"><label>show</label>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">confirm Password </label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="cpass"  placeholder="Please Enter Retype Your password" required id="s2">
			<input type="checkbox" onclick="show1()"><label>show</label>
			</div>
			</div>
			<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" name="reg" value="Register" class="btn btn-info" class="but"> <input type="reset" name="Reset" value="Reset" class="btn btn-info"> 
			</div>	
			</div>	
			</form>					
               
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-info" data-dismiss="modal" value="close">
        </div>
      </div>      
    </div>
  </div>
  
  
  <!-- pop window end-->
</body>
</html>