<?php
	include("connection.php");
	session_start();
	
	if(isset($_POST["btnLearners"]))
	{
		include("connection.php");
		$fname=$_POST["txtfname"];
		$mname=$_POST["txtmname"];
		$lname=$_POST["txtlname"];
		$relation=$_POST["relation"];
		$rfname=$_POST["txtrfname"];
		$rmname=$_POST["txtrmname"];
		$rlname=$_POST["txtrlname"];
		$sex=$_POST["sex"];
		$dob=$_POST["dob"];
		$age=$_POST["txtage"];
		$pob=$_POST["txtplaceofbirth"];
		$cob=$_POST["country"];
		$education=$_POST["education"];
		$blood=$_POST["blood"];
		$phn=$_POST["txtmobile"];
		$email=$_POST["txtemail"];
		$identification1=$_POST["txtidentificationmark1"];
		$identification2=$_POST["txtidentificationmark2"];
		$state=$_POST["state"];
		$district=$_POST["district"];
		$taluk=$_POST["txttaluk"];
		$village=$_POST["txtvillage"];
		$line1=$_POST["txtaddress1"];
		$line2=$_POST["txtaddress2"];
		$line3=$_POST["txtaddress3"];
		$pin=$_POST["txtpincode"];
		$vehicleclass=$_POST["cob"];
		$file="";
		$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "learners/";
			$target_path = $target_path.basename( $_FILES['file']['name']); 
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
			}
		$regdate=date("Y")."-".date("m")."-".date("d");
		$s="insert into learnersreg (fname,mname,lname,relation,rfname,rmname,rlname,sex,dob,age,pob,cob,education,blood,phn,email,idproof1,identification1,identification2,state,district,taluk,village,line1,line2,line3,pin,regdate) values ('$fname','$mname','$lname','$relation','$rfname','$rmname','$rlname','$sex','$dob','$age','$pob','$cob','$education','$blood',$phn,'$email','$file','$identification1','$identification2','$state','$district','$taluk','$village','$line1','$line2','$line3','$pin','$regdate')";
		mysqli_query($con,$s);
		echo $s;
		$sq=mysqli_query($con,"select max(learners_id) from learnersreg");
	
			while($row=mysqli_fetch_array($sq))
			{
			   $lic_id=$row[0];
			   break;
			}
	
		
		echo $lic_id;
		
		$licType = $_REQUEST['cob']; 
		$p = implode(',',$licType);
		$x=count($licType);
		for($i = 0;$i<$x;$i++)
			{
				$p = $licType[$i];
				echo $p."<br/>";
				$ss="insert into learners_class (learners_id,class) values ($lic_id,'$p')";
				mysqli_query($con,$ss);
				
				//echo $licType[$i];
				
			}
	}
?>
<html>
<head>
<style>
.myDIV {
	display:none;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
}
		.div1{
		color:black;
		border-style: solid;
		border-color: red green blue yellow;
	    padding:30px 20px 20px 10px;
		margin:300px;
		width:50%;
		height:50%;
   	   
	}
	input[type=date],select{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=submit] {
    background-color: #876754;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:200px;
}

input[type=submit]:hover {
    background-color: #455654;
}
</style>

</head>
<body>

<?php include("header.html") ?>
<div class="div1">
<form action="" method="post">	
	RTO<select name="rto">
		<?php
			$s=mysqli_query($con,"select * from rto");
			while($row=mysqli_fetch_array($s))
			{
				echo "<option value='$row[0]'>$row[1]</option>";				
			}
			
		?>
	</select>
	Learners date<input type="date" id="myDate" name="myDate">
	<br><br>
	<input type="submit" name="save"  value="Slot Booking"/>
	

	<!--<script>
		function myFunction() {
			 document.getElementById("myDIV").style.display="block";
			}
		
	</script>-->
	<?php	
	
	
	
	$f=0;
	if(isset($_POST["save"]))	
	{		
	$rto=$_POST["rto"];
	$slotdate=$_POST["myDate"];
	$q="select * from learnerstestdate where rto_id=$rto";
	echo "<br>";
	echo $rto;
	$ss=mysqli_query($con,$q);
	while($row=mysqli_fetch_assoc($ss))
			{
			//	echo "<input type=text name=hidDay value=$row[testdate]>";
				$day=$row['testdate'];
			
				break;
			}
	

 $originalDate =strtotime($_POST["myDate"]);
 $newformat = date('Ymd',$originalDate);
 $datetime = DateTime::createFromFormat('Ymd', $newformat);
 $dateToDay= $datetime->format('D');
 echo "<br>";
 echo $dateToDay." ---- ".$day."------".$slotdate;
 
					$email=$_SESSION["email"];
					echo $email;
					$lic=mysqli_query($con,"select * from learnersreg where email='$email'");
					//echo $lic;
					while($row=mysqli_fetch_assoc($lic))
					{
						$l=$row["learners_id"];
					}
					echo $l;
					
 $s="select rto,testdate from learnerstestdate where rto_id=$rto and testdate='$dateToDay'";
 $res=mysqli_query($con,$s);
 if(mysqli_num_rows ($res)>0)
 {
	 
		 echo "ssss";
		  
		 $sss=mysqli_query($con,"select datecount from testdatecount where rto_id=$rto and testdate='$slotdate'");
		 if(mysqli_num_rows($sss)>0)
		 {
			$c=0;
			$row=mysqli_fetch_assoc($sss);
			$c=$row["datecount"];
	
				if($c<=10)
				{
					//$c=$counter+1;
					$updt="UPDATE testdatecount SET datecount=$c+1 WHERE rto_id=$rto";
					mysqli_query($con,$updt);
					echo $updt;
					 
					
					
					$ss="insert into slotbooking (learners_id,rto_id,slotdate) values ($l,'$rto','$slotdate')";
					mysqli_query($con,$ss);
					echo $ss;
					 $f=1;
					//header('location:llpayment1.php');
			
				}
				else
				{
					echo "sorry selected date exceeded";
				}
		// header('location:llpayment1.php');
			
		}
		else
		{
			$m="insert into testdatecount (rto_id,testdate,datecount) values($rto,'$slotdate',1)";
			mysqli_query($con,$m);
			echo $m;
			$ss="insert into slotbooking (learners_id,rto_id,slotdate) values ($l,'$rto','$slotdate')";
			mysqli_query($con,$ss);
			echo $ss;
		 $f=1;
		}
	 
 }
 else
 {
	echo "sorry this date is not allowed";
	
 }
 
// echo $no_row;
 //if($no_row==$res)
 //echo $s;
 }
 
 
	?>
	
 </form>
<form method="post" action="learnerspay.php">
		<input type='submit' <?php if($f==1) {?> style="display:block;" <?php } else { ?> style="display:none;" <?php } ?> id='submitbtn' name='save' value='Proceed To Payment' >
	</form>

</div>
</body>
</html>