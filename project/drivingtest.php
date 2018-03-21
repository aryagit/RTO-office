<?php
			include("connection.php");
			session_start();
			?>
<html>
	<head>
	<style>
	.div1{
		color:black;
		border-style: solid;
		border-color: red green blue yellow;
	    padding:20px;
		margin:100px;
		width:30%;
		height:80%;
	}
	</style>
	</head>
	<body>
	<?php
	include("rtoheader.html");
	?>
	<div class="div1">
	<form action="drivingtest1.php" method="post">	
		<?php
			$email=$_SESSION["email"];
			$regdate=date("Y")."-".date("m")."-".date("d");

			$s=mysqli_query($con,"select * from rtologin where username='$email'");
			$row=mysqli_fetch_array($s);
			$rto=$row[0];
			echo $rto;
			?>
			Learners_No:<select name="learnersno">
		<?php
			$s=mysqli_query($con,"select * from driving_test_date_slot where rto='$rto' and drivingtestdate='$regdate'");
			while($row=mysqli_fetch_array($s))
			{
				echo "<option>$row[1]</option>";
			}
			
			?>
			
		
	</select>
			
		
		<input type="submit" name="next">
		</form>
		<?php
		/*if(isset($_POST["next"]))
		{
			session_start();
			$lic=$_POST["learnersno"];
			$_SESSION["learnerno"]=$lic;
			header('location:drivingtest1.php');
		}*/
		?>
		</div>
	
	</body>
</html>