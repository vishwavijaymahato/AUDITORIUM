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
	error_reporting(0);
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
<script>
			function validat()
				{
 					var date=document.fname.var1.value;
 					var name=document.fname.var.value;
					var s1=document.fname.a1.value;
					var s2=document.fname.a2.value;
					var s3=document.fname.a3.value;
					var s4=document.fname.a4.value;
					if(name==null || name=="" ){
						alert("audi id and date cant be blank select audi_id and date");
					return false;
						}
 					else if(date==null || date=="")
					 {
						 alert("date cant be blank Enter date");
						
						return false;
					 }
					 else if(s1=="N/A" && s2=="N/A" && s3=="N/A" && s4=="N/A")
					 {
						 alert("please select the slot ");
						
						return false;
					 }
					
else{
	return true;

}
}
 </script>

<body>
	<div class="container">
		<div class="jumbotron">
			<div class="card-body">
				<form method="post" action="">
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
      <th class="text-right">ACTION</th> 
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
		<td>$row[3]</td>
		<td class='text-right'>
      	<center>
      		<input type='radio' name='radio' value=$row[0] onchange='return chk()' >
      	 </center>
      	</td>


		</tr>";
		$i=$i+1;
	}


?>
</tbody>

</table>
</form>
</div>	
	<div>
<label>DATE:</label>
             <input type="date" name="d1" onchange="showdate(this.value)"></input>
            </div>
			</center>
			<div id="txtHint"></div>
		
	

<form style="margin-top:18px" name="fname" action="bookingform.php" method="post" onsubmit="return validat()">
            <div class="form-group" style="margin-top:50px; margin-left:40px">
			<input type="text"  value="<?php echo $_SESSION['date'] ?>" name="var1"  >
				<input type="text"  value="<?php echo $_SESSION['auid'] ?>" name="var"  >
				
            	<button type="button" class="btn btn-primary" id="b1" style="display:; background-color:blue;" onclick="click2()">09:00-12:00</button>
            	<input type="text" id="c1" value="N/A" name="a1" style="display:none;" >
            	<button type="button" class="btn btn-primary" id="b2" style="display:; background-color:blue;" onclick="click3()" >12:30-15:30</button>
            	<input type="text" id="c2" value="N/A" name="a2" style="display:none" >
            	<button type="button" class="btn btn-primary" id="b3"  style="display:;background-color:blue;" onclick="click4()" >16:00-19:00</button>
            	<input type="text" id="c3" value="N/A" name="a3" style="display:none" >
            	<button type="button" class="btn btn-primary" id="b4"  style="display:;background-color:blue;" onclick="click5()">19:30-22:30</button>
            	<input type="text" id="c4" value="N/A" name="a4" style="display:none" >
				
             <input type="submit"  class="btn btn-success" value="NEXT" name="ok" style="margin-left:20%;" id="bs">
             

          

            
				</div>
			
			
			<hr><br>
             
</form>
</div>
<script>
             	function click2()
             	{

             		if(document.getElementById('c1').checked==false)
             		{
             			document.getElementById('c1').checked=true;
						document.getElementById('c1').value="Booked";
             			document.getElementById('b1').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c1').checked==true)
             		{
             			document.getElementById('c1').checked=false;
						document.getElementById('c1').value="N/A";
             			document.getElementById('b1').style.backgroundColor="blue";
             		}
             	}

             	function click3()
             	{

             		
             		if(document.getElementById('c2').checked==false)
             		{
             			document.getElementById('c2').checked=true;
						document.getElementById('c2').value="Booked";
             			document.getElementById('b2').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c2').checked==true)
             		{
             			document.getElementById('c2').checked=false;
						document.getElementById('c2').value="N/A";
             			document.getElementById('b2').style.backgroundColor="blue";
             		}

             	}
             	function click4()
             	{
             		
             		if(document.getElementById('c3').checked==false)
             		{
             			document.getElementById('c3').checked=true;
						document.getElementById('c3').value="Booked";
             			document.getElementById('b3').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c3').checked==true)
             		{
             			document.getElementById('c3').checked=false;
						document.getElementById('c3').value="N/A";
             			document.getElementById('b3').style.backgroundColor="blue";
             		}
             	}
             	function click5()
             	{
             		
             		if(document.getElementById('c4').checked==false)
             		{
             			document.getElementById('c4').checked=true;
						document.getElementById('c4').value="Booked";
             			document.getElementById('b4').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c4').checked==true)
             		{
             			document.getElementById('c4').checked=false;
						document.getElementById('c4').value="N/A";
             			document.getElementById('b4').style.backgroundColor="blue";
             		}
             	}
             </script>
                    
            		






<script>
function showdate(str) {
  var xhttp;
  var radios = document.getElementsByName('radio');
var value="";
for (var i = 0; i < radios.length; i++) {
    if (radios[i].type === 'radio' && radios[i].checked) {
        // get value, set checked flag or do whatever you need to
        value = radios[i].value;
			
    }
}
if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }  
  xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
	  window.location.reload();
    }
  };
  xhttp.open("POST", "ajx.php?var1="+str+"&var="+value,true);
  xhttp.send();
}
</script>

<script>
r1="<?php echo $_SESSION['t1']; ?>"
				if(r1=="Booked")
				{
				document.getElementById('b1').style.backgroundColor='red';
				document.getElementById('b1').disabled=true;
				}
</script>
<script>
r2="<?php echo $_SESSION['t2']; ?>"
				if(r2=="Booked")
				{
				document.getElementById('b2').style.backgroundColor='red';
				document.getElementById('b2').disabled=true;
				}
</script>
<script>
r3="<?php echo $_SESSION['t3']; ?>"
				if(r3=="Booked")
				{
				document.getElementById('b3').style.backgroundColor='red';
				document.getElementById('b3').disabled=true;
				}
</script>
<script>
r4="<?php echo $_SESSION['t4']; ?>"
				if(r4=="Booked")
				{
				document.getElementById('b4').style.backgroundColor='red';
				document.getElementById('b4').disabled=true;
				
				}
				
</script>
<script>
				if(r1=="Booked" && r2=="Booked" && r3=="Booked" && r4=="Booked" )
				{
					
					document.getElementById('bs').style.backgroundColor='red';
				document.getElementById('bs').disabled=true;
				}
</script>

 <script>
 window.onload=refresh;
 function refresh()
 {
	 <?php unset($_SESSION['t1']);
	 unset($_SESSION['t2']);
	 unset($_SESSION['t3']);
	 unset($_SESSION['t4']);
	 unset($_SESSION['date']);
	 unset($_SESSION['auid']);
	 ?>
				
 }
</script> 

		



	</div>
</div>	
			
</body>
</html>