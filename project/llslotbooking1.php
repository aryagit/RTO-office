<html>
	<head>
		<style>
			.div1{
		color:white;
		border-style: solid;
		border-color: red green blue yellow;
	    padding:20px 20px 20px 180px;
		margin:200px;
		width:60%;
	   
   	   
	}
	td,th{
		padding:10px;
		/* padding:10px 0px 10px 10px; */
	}
	
	h3{
		padding:0px;
		color:black;
		font-family:landscape;
		font-variant: small-caps;
	}
	* {
    box-sizing: border-box;
}

input[type=text],select{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=email]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}

input[type=number]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=date]{
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
input[type=reset] {
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
input[type=reset]:hover {
    background-color: #455654;
}

.
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
		</style>
	</head>
	<body>
	<?php include("header.html");?>
	 
		<div class="div1">
		<h3>LL Slot Appointment</h3>
			<form method="post" action="">
				<table>
					<!--<tr>
						<td>District</td>
						<td colspan="4"><select name="district">
							<option>Trivandram</option>
							<option>Kollam</option>
							<option>Pathanamthitta</option>
							<option>Alappuzha</option>
							<option>Kottayam</option>
							<option>Ernakulam</option>
							<option>idukki</option>
							<option>palakkadu</option>
							<option>Trissur</option>
							<option>Kozhikodu</option></select></td>	
					</tr>
					<tr>
						<td>RTO Office</td>
						<td colspan="4"><select name="rto">
							<option>Trivandram</option>
							<option>Kollam</option>
							<option>Pathanamthitta</option>
							<option>Alappuzha</option>
							<option>Kottayam</option>
							<option>Ernakulam</option>
							<option>idukki</option>
							<option>palakkadu</option>
							<option>Trissur</option>
							<option>Kozhikodu</option></select></td>	 
					</tr>-->
					<tr>
						<td>Slot booking</td>
						<td><input type="date" name="slotdate"></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit"></td>
					<td><input type="reset" name="reset"></td>
				</tr>
				</table>
			</form>
		</div>
		<?Php
	if(isset($_POST["submit"]))
	{
		include("connection.php");
		//$district=$_POST["district"];
		//$rto=$_POST["rto"];
		$slotdate=$_POST["slotdate"];
		$sq=mysqli_query($con,"select max(learners_id) from learnersreg");
	
			while($row=mysqli_fetch_assoc($sq))
			{
			   $lic_id=$row["learners_id"];
			   $district=$row["district"];
			   $rto=$row["taluk"];
			   break;
			}
		$s="insert into slotbooking (learners_id,district,rto,slotdate) values ($lic_id,'$district','$rto','$slotdate')";
		mysqli_query($con,$s);
		echo $s;
	}
	?>
	<?php include("footer.php");?>
	</body>
</html>