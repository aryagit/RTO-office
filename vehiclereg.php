<html>
	<head>
		<style>
			.div1{
				
		color:black;
		border-style: solid;
		border-color: red green blue yellow;
	    width:90%;
		
		margin:100px 10px 0px 100px;
   	   
	}
	td{
		padding:9px;
		/* padding:10px 0px 10px 10px; */
	}
	
	h3{
		color:#7654432;
		size:20%;
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
.table1{
	
	color:black;
	width:98%;
	padding:20px 0px 0px 60px;
}
	</style>
	</head>
	<body>
	<?php include("header.html");?>
	<form name="form1" action="" method="post" enctype="multipart/form-data">
	
<div class="div1">
		<h3>Vehicle Registration</h3>
			
				<table class="table1" cellspacing="9" cellpadding="8">
					<tr>
						
						<th colspan="2">Vehicle Details</th><th>personal Details</th>
					<tr>
						<td>Registration No:</td>
						<td><input type="text" name="txtregno"/></td>
						<td></td><td></td>
						<td>Name:</td>
						<td><input type="text" name="txtname"/></td>
					</tr>
					<tr>
						<td>Maker's name:</td>
						<td><input type="text" name="txtmname"/></td>
						<td></td><td></td>
						<td>Permanent Address:</td>
						<td><textarea rows="4" name="txtaddress" cols="50"></textarea></td>
					</tr>
					<tr>
						<td>Class of Vehicle:</td>
						<td><select name="class">
							<option>Two wheeler</option>
							<option>Four wheeler</option>
							<option>Three wheeler</option></td>
							<td></td>
						<td colspan="2">Sex:</td>
						<td><input type="radio" name="sex" value="m" checked/>Male<input type="radio" name="sex" value="f"/>Female</td>
					</tr>
					<tr>
						<td>Dealer:</td>
						<td><input type="text" name="txtdealer"/></td>
						<td></td><td></td>
						<td>Date of Birth:</td>
						<td><input type="date" name="dob" placeholder="dd/mm/yyyy"/></td>
					</tr>
					<tr>
						<td>Vehicle name:</td>
						<td><input type="text" name="txtvname"/></td>
						<td></td><td></td>
						<td>Age:</td>
						<td><input type="text" name="txtage"/>ys</td>
					</tr>
					<tr>
						<td>Manufactured date:</td>
						<td><input type="date" name="mdate"/></td>
						<td></td><td></td>
						<td>Adhaar No::</td>
						<td><input type="text" name="txtadhaar"/></td>
					</tr>
					<tr>
						<td>HP:</td>
						<td><input type="text" name="txthp"/></td>
						<td></td><td></td>
						<td>ID proof:</td>
						<td><input type="file" name="file"></td>
					</tr>
					<tr>
						<td>Chassis No:</td>
						<td><input type="text" name="txtchassisno"/></td>
						<td></td><td></td>
						<td>Passport Size Photo:</td>
						<td><input type="file" name="fileimg"/></td>
					</tr>
					<tr>
						<td>Engine No:</td>
						<td><input type="text" name="txtengineno"/></td>
					</tr>
					<tr>
						<td>Fuel:</td>
						<td><input type="text" name="txtfuel"/></td>
					</tr>
					<tr>
						<td>Color:</td>
						<td><input type="text" name="txtcolor"/></td>
					</tr>
					<tr>
						<td>Length:</td>
						<td><input type="text" name="txtlength"/></td>
						<td></td><td></td>
						<td><input type="submit" name="save" value="Save"/></td>
						<td><input type="reset" name="reset" value="Reset"/></td>
					</tr>
					<tr>
						<td>Width:</td>
						<td><input type="text" name="txtwidth"/></td>
					</tr>
					<tr>
						<td>Height:</td>
						<td><input type="text" name="txtheight"/></td>
					</tr>
					<tr>
						<td>Tyre size:</td>
						<td><input type="text" name="txttyresize"/></td>
					</tr>
				</table>
			
				
				
				<!--<h3>Personel Details</h3>
				<table class="table2">
					<tr>
						<td>Name:</td>
						<td><input type="text" name="txtname"/></td>
					</tr>
					<tr>
						<td>Permanent Address:</td>
						<td><textarea rows="4" name="textaddress" cols="50"></textarea></td>
					</tr>
					<tr>
						<td>Sex:</td>
						<td><input type="radio" name="sex" value="m" checked/>Male<input type="radio" name="sex" value="f"/>Female</td>
					</tr>
					<tr>
						<td>Date of Birth:</td>
						<td><input type="date" name="dob" placeholder="dd/mm/yyyy"/></td>
					</tr>
					<tr>
						<td>Age:</td>
						<td><input type="text" name="txtage"/>ys</td>
					</tr>
					<tr>
						<td>Adhaar No::</td>
						<td><input type="text" name="txtvname"/></td>
					</tr>
					<tr>
						<td colspan="2">ID proof:</td>
						<td><input type="file" name="file"></td>
					</tr>
					<tr>
						<td>Passport Size Photo:</td>
						<td><input type="file" name="file1"/></td>
					</tr>
				</table>-->
				</div>
			
			</form>
			<?Php
	if(isset($_POST["save"]))
	{
		include("connection.php");
		$regno=$_POST["txtregno"];
		$mname=$_POST["txtmname"];
		$class=$_POST["class"];
		$dealer=$_POST["txtdealer"];
		$vname=$_POST["txtvname"];
		$mdate=$_POST["mdate"];
		$hp=$_POST["txthp"];
		$chassisno=$_POST["txtchassisno"];
		$engineno=$_POST["txtengineno"];
		$fuel=$_POST["txtfuel"];
		$color=$_POST["txtcolor"];
		$length=$_POST["txtlength"];
		$width=$_POST["txtwidth"];
		$height=$_POST["txtheight"];
		$tyresize=$_POST["txttyresize"];
		$name=$_POST["txtname"];
		$address=$_POST["txtaddress"];
		$sex=$_POST["sex"];
		$dob=$_POST["dob"];
		$age=$_POST["txtage"];
		$adhaarno=$_POST["txtadhaar"];
		$fileid="";
		$fileid=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "vehiclereg_id/";
			$target_path = $target_path.basename( $_FILES['file']['name']); 
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$fileimg="";
		$fileimg=$_FILES["fileimg"]["name"];
		if( $_FILES['fileimg']['name'] != "" )
		{
			$target_path = "vehiclereg_img/";
			$target_path = $target_path.basename( $_FILES['fileimg']['name']); 
			if(move_uploaded_file($_FILES['fileimg']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['fileimg']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$regdate=date("Y")."-".date("m")."-".date("d");
		$s="insert into vehicle_reg (regno,class,dealer,vname,mdate,hp,chassisno,engineno,fuel,color,length,width,height,tyresize,name,address,sex,adhaarno,idproof,img,regdate) values ('$regno','$class','$dealer','$vname','$mdate','$hp','$chassisno','$engineno','$fuel','$color','$length','$width','$height','$tyresize','$name','$address','$sex',$adhaarno,'$fileid','$fileimg','$regdate')";
		mysqli_query($con,$s);
		echo $s;
	}
	?>
	<?php include("footer.php");?>
	</body>
</html>