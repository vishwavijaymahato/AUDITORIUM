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
	$aid=$_REQUEST["audi_id"];
	//echo $aid;
	$name=$_REQUEST["nam"];
	//echo $name;
	$e1=$_REQUEST["email"];
	//echo $e1;
	$e2=$_REQUEST["event"];
	//echo $e2;
	$c1=$_REQUEST["cont"];
	//echo $c1;
	$c2=$_REQUEST["altcont"];
	//echo $c2;
	$add=$_REQUEST["addrs"];
	$d1=$_REQUEST["date"];
	$s1=$_REQUEST["t1"];
	$s2=$_REQUEST["t2"];
	$s3=$_REQUEST["t3"];
	$s4=$_REQUEST["t4"];
	$aname=$_REQUEST["audi_name"];
	$seats=$_REQUEST["seat"];
	$price=$_REQUEST["pric"];
	global $bookid;
	
	
						
	global $sum;
	//echo $bid;
						
						
						//$conn=mysqli_connect("localhost","root","","auditorium");
						$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
							$sql="select * from audi_details where audi_id='$aid'";
						$res= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($res))
						{
							
							$sp=$row[3];
							//echo $sp;
							$sum=0;
							if($s1=="Booked")
							{
							$sum=$sum+$sp;
							}
							if($s2=="Booked")
							{
							$sum=$sum+$sp;
							}
							if($s3=="Booked")
							{
							$sum=$sum+$sp;
							}
							if($s4=="Booked")
							{
							$sum=$sum+$sp;
							}
							
						}
			
	
	
	
	
$c=1;
if(isset($_POST["sub"]))
{

	
   // $conn=mysqli_connect("localhost","root","","auditorium");
	$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
	$sq="select * from booking_status where aid='".$aid."' and date='".$d1."'";
    $re= mysqli_query($conn,$sq);
	
	if(mysqli_num_rows($re)!=0)
	{
		
    
    $sql="select * from booking";
    $res= mysqli_query($conn,$sql);
       
    while($row=mysqli_fetch_assoc($res))
    { $c=$c+1;}
     $bookid="AUDIBOOKID".(string)$c;
    
    
  
    $sql1="insert into booking (bid,uid,name, Address, C_no, A_no, email, aid, seat, event, price, date,slot1,slot2,slot3,slot4,payment,bdate) values ('".$bookid."','".$userlogin."','".$name."','".$add."', '".$c1."','".$c2."',
	'".$e1."','".$aid."','".$seats."','".$e2."','".$price."','".$d1."','".$s1."','".$s2."','".$s3."','".$s4."','".$sum."',now())";

    mysqli_query($conn,$sql1);
	echo "<script>var x=alert('YOUR Booking ID is $bookid ');
			
				window.location.href='home.php';
			
	</script>";
	
	if($s1=="Booked")
	{
	$sql3="update booking_status set slot1='Booked' where aid='".$aid."' and date='".$d1."'";
	mysqli_query($conn,$sql3);
	}
	 if($s2=="Booked")
	{
	$sql3="update booking_status set slot2='Booked' where aid='".$aid."' and date='".$d1."'";
	mysqli_query($conn,$sql3);
	}
	if($s3=="Booked")
	{
	$sql3="update booking_status set slot3='Booked' where aid='".$aid."' and date='".$d1."'";
	mysqli_query($conn,$sql3);
	}
	if($s4=="Booked")
	{
	$sql3="update booking_status set slot4='Booked' where aid='".$aid."' and date='".$d1."'";
	mysqli_query($conn,$sql3);
	}
    
		
	}
	
	
	else
	{
		$sql="select * from booking";
    $res= mysqli_query($conn,$sql);
       
    while($row=mysqli_fetch_assoc($res))
    { $c=$c+1;}
     $bookid="AUDIBOOKID".(string)$c;
    
    
  
    $sql1="insert into booking (bid,uid,name, Address, C_no, A_no, email, aid, seat, event, price, date,slot1,slot2,slot3,slot4,payment,bdate) values ('".$bookid."','".$userlogin."','".$name."','".$add."', '".$c1."','".$c2."',
	'".$e1."','".$aid."','".$seats."','".$e2."','".$price."','".$d1."','".$s1."','".$s2."','".$s3."','".$s4."','".$sum."',now())";

    mysqli_query($conn,$sql1);
	echo "<script>var x=alert('YOUR Booking ID is $bookid ');
			
				window.location.href='home.php';
			
	</script>";
	$sql3="insert into booking_status (aid, date, slot1, slot2, slot3,slot4)values('".$aid."','".$d1."','".$s1."','".$s2."','".$s3."','".$s4."')";
    mysqli_query($conn,$sql3);
	
	}
	
    
}

    
            
?>
<?php
error_reporting(0);
	$bid=$_REQUEST['var'];
	
?>




<html>
<head>
		

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
        



   


<script>
function goback()
{
	window.history.go(-1);
}

</script>
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
<title>Student Registration</title>

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

h1
{
    font-size:35px;
    font-family:Times New Roman;

    font-weight:700;
    border-bottom-style:ridge;
	color:white;
}
li{
color:white;}

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


	
	








<div class="container" >
	
 <div class="row">
		
  <div class="col-md-5" id="form" style="margin-left:60px;margin-top:50px;border:1px solid white;">
		
	<form style="margin-top:18px" name="fname" action="booking4.php" method="POST"  >
    	<div class="form-group">
		<center>
			<h1><label style="font-size:25">PayMent Details</label></h1>
			</center>
				<div class="form-group" style="width:100%; float:left">
             <label> AUDITORIUM Id :</label>
             <input type="text" name="audi_id"  class="form-control" value="<?php echo($aid);?>" readonly id="s1">
            </div>
			
			<div class="form-group" style="width:100%; float:left">
             <label>NAME :</label>
             <input type="text" class="form-control" name="name" value="<?php echo($name);?>" readonly id="s1">
            </div>
					          
     
			<div class="form-group" style="width:100%; float:left">
             <label>DATE :</label>
             <input type="text" class="form-control" name="date" value="<?php echo($d1);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>09:00-12:00:</label>
             <input type="text" class="form-control" name="t1" value="<?php echo($s1);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>12:30-03:30 :</label>
             <input type="text" class="form-control" name="t2" value="<?php echo($s2);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>16:00-19:00 :</label>
             <input type="text" class="form-control" name="t3" value="<?php echo($s3);?>" readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>19:30-22:30 :</label>
             <input type="text" class="form-control" name="t4" value="<?php echo($s4);?>" readonly id="s1">
            </div>

			
			<div class="form-group" style="width:48%;float:left;">
			 <label>PER SLOT PRICE:</label>
			 <input type="number" class="form-control" name="slot" value="<?php echo ($sp); ?>" readonly id="s1">
			</div>
			
			
			<div class="form-group" style="width:48%;float:right;">
			 <label>TOTAL PRICE:</label>
			 <input type="number" class="form-control" name="p1"  value="<?php echo ($sum); ?>" readonly id="s1">
			</div>
			
			

			
			<hr><br>
					
			
			
			
					
        </form>          
    </div>
	
				
</div>
<div class="col-md-5" id="form" style="float:left;border:1px solid white ; margin-top:50px;" name="f1">
                    
						<h1 class="title-agile text-center">Payment</h1>
						<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Credit/Debit</li>
							</ul>
							</div>
                            <form action="#" method="post" onsubmit="return con()" >
                                
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Name on Card</label>
                                                <input class="billing-address-name form-control" type="text" name="cname" placeholder="John Smith" required >
												
											</div>
                                            <div class="paymntf_card_number_grids">
                                                <div class="fpay_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Card Number</label>
                                                        <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                            autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;"  required>
												                                                  
												   </div>
                                                </div>
                                                <div class="fpay_card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">CVV</label>
                                                        <input class="security-code form-control" Â· inputmode="numeric" type="text" name="scode" placeholder="&#149;&#149;&#149;" required>
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Expiration Date</label>
                                                <input class="expiration-month-and-year form-control" type="text" name="may" placeholder="MM / YY" required>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </section>
								<div style="height:px;">
								<input type="submit" class="submit" name="sub" value="Make payment" >
                                   </div> <br>
								<div>
								<img src="image/2.png" style="height:99px;width:150px;" >&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/3.jfif" style="height:99px;width:150px;" >
								</div>								
                            </form>

                        
                    </div>

			
			
			</body>
</html>