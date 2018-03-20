<?php
		include("connection.php");
		
		$username=$_POST["txtusername"];
		$password=$_POST["txtpassword"];
		$sq="select * from adminlogin where username='$username'and password='$password';";
		echo $sq;
			$res=mysqli_query($con,$sq);
				if(mysqli_num_rows($res)>0)
				{
				header('location:adminprocess.php');
				} 
				else
				{
					echo "invalid user";
					header('location:adminlogin.html');
				}
?>

