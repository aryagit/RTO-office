<?php
session_start();
include("connection.php");
?>
<html>
<head>

</head>
<body>
<?php include("header.html");?>
    </div>
<?php
			
					
					$email=$_SESSION["email"];
					$s=mysqli_query($con,"select *from signup where email='$email'");
					while($row=mysqli_fetch_array($s))
					{
						$name=$row[1];
					}
				 echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Welcome $email...!</font></marquee>";
			  echo "</div>";	 
	  
					
				?>
				<?php include("footer.php");?>
</body>
</html>
