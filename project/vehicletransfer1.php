 <?php
include("connection.php");
?>
<html>
	<head>
	<style>
		.div1{
		color:#deb887;
		border-style: solid;
		border-color: red green blue yellow;
		width:90%;
		font-size:18px;
		height:60%;
		margin:70px;
	    /*padding:100px 400px 400px 100px;*/
		background-color:#a0522d;
		}
		.div3{
		color:#deb887;
		border-style: solid;
		border-color: red green blue yellow;
		width:100%;
		font-size:18px;
		height:60%;
		margin:70px;
	    /*padding:100px 400px 400px 100px;*/
		background-color:#a0522d;
		}
		.div2{
		color:#deb887;
		font-size:18px;
		border-style: solid;
		border-color: red green blue yellow;
		width:80%;
		height:100%;
		margin:10px 100px 200px 50px;
		background-color:#a0522d;
	    /*padding:100px 400px 400px 100px;*/
		}
	
		td{
			padding:19px;
		}
		.divseller{
			border-color: red green blue yellow;
			padding:8px;
		}
		}
input[type=date]{
	color:black;
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=text]{
	color:black;
    width: 60%;
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
	</style>
	</head>
	<body>
	<?php include("header.html");?>
	<!--<table>
		<tr>
			<td>image<img src="vehiclereg_img/$img"></td>
		</tr>
		<tr>
			<td>Sellers Name:</td>
			<td><?php echo $name;?></td>
		<tr>
		
		</tr>
		</tr>
	</table>-->
	<div class='col-md-6'>
	<br><br><br>
<div class="div1">
	<h1>Sellers Details</h1>
	<?php
include("connection.php");
		//$rto=$_POST["rto"];
		$regno=$_POST["txtregno"];
		$chassis=$_POST["txtchassisno"];
		$s=mysqli_query($con,"select * from vehicle_reg where regno='$regno' and chassisno='$chassis'");
		while($row=mysqli_fetch_assoc($s))
			{
			echo "<br><br><font color='#cd853f'>Name:</font>&nbsp&nbsp&nbsp" . $row["name"]. "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='#cd853f'>Address of the Seller:</font>&nbsp&nbsp&nbsp" . $row["address"]. "<br>&nbsp&nbsp&nbsp&nbsp<font color='#cd853f'>Sex:</font>&nbsp&nbsp&nbsp" . $row["sex"]. "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='#cd853f'>Adhaar No:</font>&nbsp&nbsp&nbsp" .$row["adhaarno"]. "";
			
			// echo "<table align='center' border='1' cellpadding='7' cellspacing='6' width='80%'><tr><td><img src='vehiclereg_img/".$row["img"]."' width='150px' height='150px'></td><td>Name of the Seller:</td><td>" . $row["name"]. "</td><tr><td>Address of the Seller</td>" . $row["address"]. "<td>Sex</td><td>" . $row["sex"]. "</td></td></tr></table>";
			}
	
?>
</div>
</div>
	<div class='col-md-6'>
	<br><br><br>
	<div class="div3">
	<h1>Vehicle Details</h1>
	<?php
include("connection.php");
		//$rto=$_POST["rto"];
		//$regno=$_POST["txtregno"];
		//$chassis=$_POST["txtchassisno"];
		$s=mysqli_query($con,"select * from vehicle_reg where regno='$regno' and chassisno='$chassis'");
		while($row=mysqli_fetch_assoc($s))
			
			{
				$vreg=$row["vreg_id"];
			echo "<br><br><font color='#cd853f'>Class of Vehicle:</font>&nbsp&nbsp&nbsp" . $row["class"]. "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='#cd853f'>Vehicle Name:</font>&nbsp&nbsp&nbsp" . $row["vname"]. "<br>&nbsp&nbsp&nbsp&nbsp<font color='#cd853f'>Vehicle Registerno:</font>&nbsp&nbsp&nbsp" . $row["regno"]. "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='#cd853f'>TyreSize:</font>&nbsp&nbsp&nbsp" .$row["tyresize"]. "";
			
			// echo "<table align='center' border='1' cellpadding='7' cellspacing='6' width='80%'><tr><td><img src='vehiclereg_img/".$row["img"]."' width='150px' height='150px'></td><td>Name of the Seller:</td><td>" . $row["name"]. "</td><tr><td>Address of the Seller</td>" . $row["address"]. "<td>Sex</td><td>" . $row["sex"]. "</td></td></tr></table>";
			}
			echo $vreg;
			//echo"<form action='' method='post' enctype='multipart/form-data'>";
				//echo"<input type='file' name='file'><br>";
				//echo"Insurance Policy Documents:<input type='file' name='file1'><br>";
				//echo"Pollution Clearance Certificte:<input type='file' name='file2'><br>";
				//echo"<input type='submit' name='submit'>";
			
	
	?>
		<form action="vehicletransfer2.php" method="post" enctype="multipart/form-data">
			Rc Book:<input type="file" name="file">
			Insurance Policy Documents:<input type="file" name="file1">
			Pollution Clearance Certificte:<input type="file" name="file2">
			
			
</div>
</div>
<div class="col-md-12">
<div class="div2">
		<h1>Buyers Details</h1>
		<br>
		Name of the Buyer: <input type="text" name="txtbname">
		<br>
		Address of the Buyer: <input type="text" name="txtaddress">
		<br>
		Address proof attested by the gezetted officer: <input type="file" name="file3">
		<br>
		Adhaar No:		<input type="text" name="txtadhaar">
		<br>
		Id proof attested by the gezetted officer: <input type="file" name="file4">
		<br>
		Date of birth:<input type="date" name="txtdob">
		<br>
		Age<input type="text" name="txtage">
		<br>
		
		Passport size photo: <input type="file" name="file5">
		<br>
		<input type="submit" name="submit">
</form>
	
	
</div>
</div>

	<?php //include("footer.php");?>
		
	</body>
</html>
