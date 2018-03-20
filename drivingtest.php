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
	include("adheader.html");
	?>
	<div class="div1">
	<form action="drivingtest1.php" method="post">	
		Learners No:<select name="learnersno">
		<?php
			include("connection.php");
			$s=mysqli_query($con,"select * from learnersreg");
			while($row=mysqli_fetch_array($s))
			{
				echo "<option value='$row[0]'>$row[0]</option>";				
			}
			
		?>
		<input type="submit" name="next">
		</form>
		</div>
	</select> 
	</body>
</html>