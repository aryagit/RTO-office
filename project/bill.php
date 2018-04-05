<html>
	<head>
	<style>
			.div1{
		
		border-style: solid;
		border-color: red green blue yellow;
		width:140%;
		font-size:18px;
		height:100%;
		margin:50px;
	    /*padding:100px 400px 400px 100px;*/
		background-color:white;
	}
	.mm{
		margin:100px 10px 0px 400px;
	}
	.div2{
		
		border-style: solid;
		border-color: red green blue yellow;
		width:50%;
		
		height:60%;
		margin:50px 10px 0px 300px;
	    /*padding:100px 400px 400px 100px;*/
		background-color:white;
	}
	body{
		background-image: url("img/12.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		
	}
	</style>
	</head>
	<body>
	<br>
	<br>
	<br>
	<?php
	include("connection.php");
	include("header.html");
	if(isset($_POST["save"]))
	{
	$lcid=$_POST["txtlid"];
	//echo $lcid;
	}
	$rr=mysqli_query($con,"select * from learnersreg where learners_id=$lcid");
	$d=mysqli_fetch_assoc($rr);
				$lno=$d['learnersno'];
				$fname=$d['fname'];
				$mname=$d['mname'];
				$lname=$d['lname'];
				$rfname=$d['rfname'];
				$rmname=$d['rmname'];
				$rlname=$d['rlname'];
				$dob=$d['dob'];
				$blood=$d['blood'];
				$hname=$d['line1'];
				$po=$d['line2'];
				$street=$d['line3'];
				$dist=$d['district'];
				$state=$d['state'];
				$pin=$d['pin'];
				$rto=$d['rto'];
	$m=mysqli_query($con,"select * from fee_paid where learners_id=$lcid");
	$mm=mysqli_fetch_assoc($m);
	$tot=$mm['tot'];
	//echo $tot;
	//echo $tot;
				
	?>
	<div class="col-md-6">
	<div class="div1">
	<br>
		<h2>KERALA MOTOR VEHICLE DEPARTMENT</h2>
		___________________________________________________________________________________________
		<h4 align="center" >LEARNERS LICENCE PAYMENT RECEIPT</h4>
		<table width="100%" cellspacing="6">
		<tr>
			<td style="padding:8px;"><b>Your Learners no is </b> </td>
			<td style="padding:8px;"><b>:</b><?php echo $lno;?></td>
		
			<td style="padding:8px;"><b>Your RTO</b> </td>
			<td style="padding:8px;"><b>:</b><?php echo $rto;?></td>
		</tr>
		<tr>
			<td style="padding:8px;"><b>Applicant Name</b></td>
			<td style="padding:8px;"><b>:</b><?php echo $fname; echo "  ";  echo $mname; echo "  ";  echo $lname;?></td>
			
		</tr>
		<tr>
			<td style="padding:8px;"><b>Date of Birth</b></td>
			<td>&nbsp;&nbsp;<b>:</b><?php echo $dob;?></td>
			<td style="padding:8px;"><b>Your Total amount</b></td><td style="padding:8px;"><b>:</b><?php echo $tot;?></td>
		</tr>
		<tr>
			<td style="padding:8px;"><b>Address</b></td>
			<td style="padding:8px;"><b>:</b><?php echo $hname;?></td></tr>
			<tr><td></td><td style="padding:8px;" colspan="3"><?php echo $street;?></td></tr>
		
		
		</table>
		__________________________________________________________________________________________
		<h3 align="center">Instructions</h3>
		<p> * Please carry your Driving Licence while driving</p>
		<p> * Please produce the Driving Licence on demand by the concerned authority</p>
		<p> * Loss of the Licence must be reported immediately to the concerned authority </p>
		<p> * Holding Driving Licence is a privilege. Drive carefully</p>
		</div>
			</div>

	<div class="col-md-6">
	<div class="mm">
	<form method="post" action="billprint.php">
	<input type="submit" name="bill"  value="Print your bill">
	</form>
	</div>
	</div>
	 <script>
	/* function printbill(){
		window.print();
	} */
	</script> 
	</body>
</html>