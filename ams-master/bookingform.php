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
 $ed=$_POST['var1'];
 $eid=$_POST['var'];
 $s1=$_POST['a1'];
 $s2=$_POST['a2'];
 $s3=$_POST['a3'];
 $s4=$_POST['a4'];
$Ename = $Email= $Eadd= $Econt= $Eevent = $Eacont ="";
$name =  $mail= $add= $acont= $cont = $event ="";

 if(isset($_POST["ok"])) {
	 
	 
	if(!empty($_POST["audi_id"]))
	{$eid=test_input($_POST["audi_id"]);}
	 
	if(!empty($_POST["date"]))
	{$ed=test_input($_POST["date"]);}

	if(!empty($_POST["t1"]))
	{$s1=test_input($_POST["t1"]);}

if(!empty($_POST["t2"]))
	{$s2=test_input($_POST["t2"]);}

if(!empty($_POST["t3"]))
	{$s3=test_input($_POST["t3"]);}

if(!empty($_POST["t4"]))
	{$s4=test_input($_POST["t4"]);}

  if (empty($_POST["name"]))
	  {$Ename = "Name is required"; }
  elseif (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) 
      {$Ename= "Only letters and white space allowed"; } 
  else 
      {$name = test_input($_POST["name"]);}
  
   if (empty($_POST["event"]))
	  {$Eevent = "event Name is required"; }
  elseif (!preg_match("/^[a-zA-Z ]*$/",$_POST["event"])) 
      {$Eevent= "Only letters and white space allowed"; } 
  else 
      {$event = test_input($_POST["event"]);}
  
  
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
     {$Email = "invalid email format"; } 
  else 
      {$mail = test_input($_POST["email"]);}
  
  
  if (empty($_POST["cont"]))
	  {$Econt = "contact no is required"; }
  elseif( strlen($_POST["cont"]) == 10)
  { if(!preg_match("/^[6789]{1}\d{9}$/",$_POST["cont"] ))
  {$Econt= "invalid no"; } 
  else 
  {$cont = test_input($_POST["cont"]);}}
  else{$Econt= "invalid no";  }
  
    
  if( strlen($_POST["altcont"]) == 10)
  { if(!preg_match("/^[6789]{1}\d{9}$/",$_POST["altcont"] ))
  {$Eacont= "invalid no"; } 
  else 
  {$acont = test_input($_POST["altcont"]);}}
  else{$Eacont= "invalid no";  }
  
  if (empty($_POST["addrs"]))
	  {$Eadd = "Name is required"; }
   else 
      {$add = test_input($_POST["addrs"]);}

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($eid !=null and $name !=null and $event !=null and $mail !=null and $cont !=null and $acont !=null  and $ed !=null and $add !=null and $s1 !=null and $s2 !=null and $s3 !=null and $s4 !=null)
{ 
  header('location:booking4.php?name='.$name.'&audi_id='.$eid.'&email='.$mail.'&event='.$event.'&cont='.$cont.
  '&altcont='.$acont.'&addrs='.$add.'&date='.$ed.'&t1='.$s1.'&t2='.$s2.'&t3='.$s3.'&t4='.$s4);
}

?>
<?php   

            if(isset($_POST['ok']))
                {
                    
                        
							//$conn=mysqli_connect("localhost","root","","auditorium");
							$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
						$sql="select * from audi_details";
                        $audi_id=$row["audi_id"];
                        $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res))
                        {
                            if($audi_id==$row["audi_id"])
                            {
                            $price= $row["price"];
                            $seats=$row["seats"];
                                
                            }
                            
                        }
                }
  ?>


<html>
<head>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    padding:10px 40px 40px 10px;
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
.err{
color:red;}



</style>

</head>
<title>booking form</title>





<body>

<div class="container" style="margin-top:px;margin-bottom:5px;">
    
 <div class="row" >
        
  <div class="col-md-6 col-md-offset-3" id="form" >
    <center><b class="h1">BOOKING  FORM</b></center>
        
    <form style="margin-top:18px" name="fname" action="" method="POST" >
        <div class="form-group">
        <center><label style="margin-top:20px">Booking Details</label></center><hr style="margin-top:10px">
               <div class="form-group" style="width:100%; float:left">
             <label> AUDITORIUM Id :</label>
             <input type="text" name="audi_id" id="s1" class="form-control"  value="<?php echo $eid;?>" readonly >
            </div>
					
            <br><label>NAME :</label>
            <input type="text" class="form-control" placeholder="Enter Full Name" name="name" id="s1"  value="<?php echo $_POST["name"];?>">
			<span class="err"><?php echo $Ename ?></span>
        </div>
                    
            <div class="form-group">
             <label>E-mail ID :</label>
             <input type="email" class="form-control" placeholder="Enter E-mail" name="email" id="s1" value="<?php echo $_POST["email"];?>">
			 <span class="err"><?php echo $Email ?></span>
            </div>
                    
            <div class="form-group" style="width:100%; float:left">
             <label>Contact No. :</label>
             <input type="text"  class="form-control" placeholder="Enter Contact No." name="cont" id="s1" value="<?php echo $_POST["cont"];?>"  >
				<span class="err"><?php echo $Econt ?></span>
		   </div>
            
            <div class="form-group"  style="width:100%; float:left;margin-left:px;">
             <label>Alt. Contact No. :</label>
             <input type="text"  class="form-control" placeholder="Enter Contact No." name="altcont" id="s1" value="<?php echo $_POST["altcont"];?>">
            <span class="err"><?php echo $Eacont ?></span>
			</div>
               <div class="form-group" style="width:100%; float:left">
                    <label>Event Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Event Name" name="event" id="s1" value="<?php echo $_POST["event"];?>">
					<span class="err"><?php echo $Eevent ?></span>
            </div>         
            <div class="form-group">
                <center>
                    <label>Address</label>
                    <input type="text" class="form-control"  style="resize:none" placeholder="Enter Address Details" id="s1" name="addrs" value="<?php echo $_POST["addrs"];?>"  >
					<span class="err"><?php echo $Eadd ?></span>
				</center>
            </div>
                     
           
			<div class="form-group" style="width:100%; float:left">
             <label>DATE :</label>
             <input type="text" class="form-control" name="date" value="<?php echo $ed;?>"  id="s1" readonly>
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>09:00-12:00:</label>
             <input type="text"  class="form-control"name="t1" value="<?php echo $s1 ;?>" id="s1" readonly >
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>12:30-03:30 :</label>
             <input type="text" class="form-control" name="t2" value="<?php echo $s2 ;?>"readonly id="s1">
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>16:00-19:00 :</label>
             <input type="text" class="form-control" name="t3" value="<?php echo $s3 ;?>" readonly id="s1" >
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>19:30-22:30 :</label>
             <input type="text" class="form-control" name="t4" value="<?php echo $s4 ;?>"readonly id="s1">
            </div>
            

            
            
            
            <hr><br>
                    
            <div class="form-group"  >
             <input type="submit" class="btn btn-success" value="NEXT" name="ok">
             <input type="reset" class="btn btn-danger" value="RESET" name="reset"/>

            </div>
            
            
            
            
           
 </form>  

</div>
             
  </div>
        
</div>


	
			
</body>
</html>