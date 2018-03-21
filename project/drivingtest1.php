<html>
	<head>
	<style>
	.div1{
		color:black;
		border-style: solid;
		border-color: red green blue yellow;
	    padding:20px;
		margin:100px;
		width:80%;
		height:80%;
	}
	.div2{
		color:black;
		border-style: solid;
		border-color: red green blue yellow;
	    padding:20px;
		margin:100px 0px 0px 100px;
		width:80%;
		height:80%;
	}
	.div3{
		color:#deb887;
		border-style: solid;
		border-color: red green blue yellow;
		width:60%;
		font-size:18px;
		height:60%;
		margin:70px;
	    /*padding:100px 400px 400px 100px;*/
		background-color:#a0522d;
		}
	</style>
	</head>
	<body>
	<form action="" method="post">	
	<?php
		include("adheader.html");
	include("connection.php");
	$lno=$_POST["learnersno"];
	//echo $lno;
	/*session_start();
	$lic=$_SESSION["learnersno"];
	echo $lic;*/
	?>
	
	<div class="col-md-6">
	<div class="div1">
	
		Learner No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtlearnersno" readonly="readonly" value="<?php echo $lno; ?>">
		<?php
		
			$s=mysqli_query($con,"select * from learnersreg where learners_id='$lno'");
			while($row=mysqli_fetch_assoc($s))
			{
				$fname=$row['fname'];
				$mname=$row['mname'];
				$lname=$row['lname'];
				$sex=$row['sex'];
				$dob=$row['dob'];
			}
			//$n=$fname+$mname;
			//echo $lic;
		?>

		<br><br>Applicant Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtfname" value="<?php echo $fname;echo "   ";echo $mname;echo "   ";echo $lname;?>">
		<!--<input type="text" name="txtmname" value="<?php echo $mname;?>">
		<input type="text" name="txtlname" value="<?php echo $lname;?>">-->
		<br><br>Gender:&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtsex" value="<?php echo $sex;?>">
		<br><br>DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtdob" value="<?php echo $dob;?>">
		<br><br>Class:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
		$ss=mysqli_query($con,"select * from learners_class where learners_id='$lno'");
			while($row=mysqli_fetch_assoc($ss))
			{
				echo"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='txtclass' value='".$row['class']."'><br>";
			}
				
				$regdate=date("Y")."-".date("m")."-".date("d");
?>
		</div>
		</div>
		<div class="col-md-6">
		<div class="div2">
		<br><br>Test 1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txttest1">
		<br><br>Test 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txttest2">
		<br><br>Primary Test:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtprimary">
		<br><br>Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtstatus">
		<br><br>Name of the officer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtofficer">
		<br><br>Test Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtdate" value="<?php echo $regdate;?>">
		<br><br><input type="submit" name="btnsubmit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="btnreset" value="Cancel">
		</div>
		</div>
				</form>

		<?php
			echo $lno;
		if(isset($_POST["btnsubmit"]))
		{
			$licc=$_POST["txtlearnersno"];
			$test1=$_POST["txttest1"];
			$test2=$_POST["txttest2"];
			$primary=$_POST["txtprimary"];
			$status=$_POST["txtstatus"];
			$officer=$_POST["txtofficer"];
			$sq="insert into driving_test (learners_id,test1,test2,primarytest,status,officer,testdate) values($licc,'$test1','$test2','$primary','$status','$officer','$regdate')";
			mysqli_query($con,$sq);
			echo $sq;
			
			}
			
		?>
	
	</body>
</html>