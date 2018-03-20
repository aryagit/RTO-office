<html>
	<head>
	</head>
	<body>
	<?php
	include("connection.php");
		$email=$_SESSION["email"];
					echo $email;
					$lic=mysqli_query($con,"select * from learnersreg where email='$email'");
					//echo $lic;
					while($row=mysqli_fetch_assoc($lic))
					{
						$l=$row["learners_id"];
					}
					echo $l;
					$s=mysqli_query($con,"select * from driving_test where learners_id='$l'");
					$row=mysqli_fetch_assoc($s);
					$ 
	?>
	</body>
</html>