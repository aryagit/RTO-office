<html>
	<head>
	<style>
	.div1{
		margin:100px;
		height:50%;
	}
	</style>
	</head>
	<body>
	<?php include("header.html");?>
	<div class="div1">
		<form action="vehicletransfer1.php" method="post">
			<table>
			<!--	<tr>
					<td>Application Submitting Office:</td>
					<td>select name="rto">
					<option>pathanamthita</option>
					<option>thiruvella</option>
					<option>ranni</option>
					<option>chenganoor</option>
					<option>konni</option>
					<option>vadasherikara</option></select></td>
				</tr>-->
				<tr>
					<td>Registration No:</td>
					<td><input type="text" name="txtregno" ></td>
				</tr>
				<tr>
					<td>Chassis No:</td>
					<td><input type="text" name="txtchassisno"></td>
					
					
				</tr>
				<tr>
					<td><input type="submit" name="next" value="Next"></td>
				</tr>
			</table>
		</form>
		</div>
		<?php include("footer.php");?>
	</body>
</html>