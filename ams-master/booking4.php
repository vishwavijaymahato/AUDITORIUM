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
<?php
error_reporting(0);
	$audi_id=$_REQUEST["audi_id"];
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$event=$_REQUEST["event"];
	$cont=$_REQUEST["cont"];
	$altcont=$_REQUEST["altcont"];
	$addrs=$_REQUEST["addrs"];
	$date=$_REQUEST["date"];
	$t1=$_REQUEST["t1"];
	$t2=$_REQUEST["t2"];
	$t3=$_REQUEST["t3"];
	$t4=$_REQUEST["t4"];
	$audi_name=$_POST["audi_name"];
	
	$seats=$_POST["seats"];
	$price=$_POST["price"];
	
	global $bookid;
	
						//$conn=mysqli_connect("localhost","root","","auditorium");
						$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
							$sql="select * from audi_details";
						$res= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($res))
						{
							if($audi_id==$row["audi_id"])
							{
							$audi_name=$row["audi_name"];
							$price= $row["price"];
							$seats=$row["seats"];
							
								
							}
							
						}	
	if(isset($_POST['s1']))
	{
	
	header('location:bookingform2.php?nam='.$_POST['n1'].'&audi_id='.$_POST['audi_id'].'&email='.$_POST['email'].'&event='.$_POST['event'].'&cont='.$_POST['cont'].
  '&altcont='.$_POST['altcont'].'&addrs='.$_POST['addrs'].'&date='.$_POST['date'].'&t1='.$_POST['t1'].'&t2='.$_POST['t2'].'&t3='.$_POST['t3'].'&t4='.$_POST['t4'].'&audi_name='.$_POST['audi_name']
  .'&seat='.$_POST['seat'].'&pric='.$_POST['price']);
	}

?>

<html>
<head>
		

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     
        

   


<script>
	function con()
	{
		if (confirm("Are you sure for final submit?"))
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
</head>
<title>booking</title>
,, 
<!-- internal css -->
<style>
body
{
	background-image:url('image/home_.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
#form
{
    background-color:#234B4B    ;
    min-height:auto;
    padding:;
}

.h1
{
    font-size:35px;
    font-family:Times New Roman;

    font-weight:700;
    border-bottom-style:ridge;
	color:white;
}

label
{
    font-size:15px;
	color:white;
}

.btn-success
{
    padding:10px;
    width:48%;
    
}

.btn-danger
{
    padding:10px;
    width:48%;
    float:right;
}
#s1{
			border: none;
			outline: none;
			background :none;
			color:white;
			border-bottom: 1px solid white;
}





</style>


<body>


	
	





<div class="container" style="margin-top:-20px;margin-bottom:5px;">
	
 <div class="row">
		
  <div class="col-md-6 col-md-offset-3 " id="form">
		
	<form style="margin-top:18px" name="fname" action="" method="post" onsubmit="return con()">
    	<div class="form-group">
		<center>
			<label style="font-size:25"><u>Confirm Your Details</u></label><br>
			<center><label style="margin-top:20px">Booking Details</label></center><hr style="margin-top:10px">
		</center>
			<div class="form-group" style="width:100%; float:left">
             <label> AUDITORIUM Id :</label>
             <input type="text" name="audi_id"   class="form-control" value="<?php echo($audi_id);?>"  required readonly id="s1">
            </div>	
			<br><label>Name :</label>
			<input type="text" class="form-control" name="n1" value="<?php echo ($name); ?>" readonly id="s1">
		</div>
					
			<div class="form-group">
			 <label>E-mail ID :</label>
			 <input type="email" class="form-control" name="email" value="<?php echo ($email); ?>" readonly id="s1">
			</div>
					
			<div class="form-group" style="width:48%; float:left">
			 <label>Contact No. :</label>
			 <input type="number" class="form-control" maxlength="10" name="cont" value="<?php echo ($cont); ?>" readonly id="s1">
			</div>
			
			<div class="form-group"  style="width:48%; float:right">
			 <label>Alt. Contact No. :</label>
			 <input type="text" class="form-control" name="altcont" value="<?php echo ($altcont); ?>" readonly id="s1">
			</div>
				<div class="form-group" style="width:100%; float:left">
                    <label>Event Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Event Name" name="event" value="<?php echo ($event); ?>" readonly id="s1">
                
            </div>
			
			<div class="form-group">
				<center>
					<label>Address</label>
					<input type="text" class="form-control" style="resize:none" name="addrs" value="<?php echo ($addrs); ?>" readonly id="s1">
				</center>
			</div>


           
		
			<div class="form-group" style="width:100%; float:left">
			 <label style="padding-left:175px">AUDITORIUM:</label>
			 <input type="text" class="form-control"  name="audi_name" value="<?php echo ($audi_name); ?>" readonly id="s1" >
			</div>
			 <hr>            
     
			<div class="form-group" style="width:100%; float:left">
             <label>DATE :</label>
             <input type="text" class="form-control" name="date" value="<?php echo($date);?>" readonly required id="s1">
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>09:00-12:00:</label>
             <input type="text" class="form-control" name="t1" value="<?php echo($t1);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>12:30-03:30 :</label>
             <input type="text" class="form-control" name="t2" value="<?php echo($t2);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>16:00-19:00 :</label>
             <input type="text" class="form-control" name="t3" value="<?php echo($t3);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>19:30-22:30 :</label>
             <input type="text" class="form-control" name="t4" value="<?php echo($t4);?>" readonly id="s1">
            </div>

			<center>
			<div class="form-group" style="width:48%;float:right;">
			 <label>CAPACITY:</label>
			 <input type="number" class="form-control" name="seat" value="<?php echo ($seats); ?>" readonly id="s1">
			</div>
			</center>
			
			<div class="form-group" style="width:48%;float:left">
			 <label>TOTAL PRICE:</label>
			 <input type="number" class="form-control" name="price"  value="<?php echo ($price); ?>" readonly id="s1">
			</div>
			



			
			<hr><br>
					
			<div class="form-group" >
			
			 <input type="submit" class="btn btn-success"  id="r" value="Final Submit"   name="s1">

			
			
			<a href="show.php"><button type="button" class="btn btn-danger">cancel</button></a>
			</div> 
			
			
					

			</div> 
			</form>
			
			
	
             
    </div>
	</div>
	</div>
	


			
			
			
 

</body>
</html>