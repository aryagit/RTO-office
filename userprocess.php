<?php
		include("connection.php");
		session_start();
		$email=$_POST["txtemail"];
		$password=$_POST["txtpassword"];
		$sq="select * from signup where email='$email'and password='$password';";
		echo $sq;
			$res=mysqli_query($con,$sq);
				if(mysqli_num_rows($res)>0)
				{
					
				$_SESSION["email"]=$email;
				header('location:userprocess1.php');
				} 
				else
				{
					echo "invalid user";
					header('location:userlogin.php');
				}
?>

