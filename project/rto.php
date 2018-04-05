<html>
	<head>
	<style>
			.div1{
				width:160%;
				margin:70px;
				border-style: solid;
				padding:50px;
				border-color: red green blue yellow;
					}
					.div2{
				width:90%;
				
				margin:70px 0px 0px 30px;
				border-style: solid;
				padding:20px;
				border-color: red green blue yellow;
					}
	input[type=text],select{
	color:black;
    width: 70%;

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
	<?php
	include("adheader.html");
	?>
	<br>
		<form action="" method="post" enctype="multipart/form-data"> 
	<div class="col-md-6"> 
		<div class="div1">
			<table width="80%" style="padding:0px 0px 0px 30px;" >
			<tr>
				<td colspan="2"   style="padding:8px;">
					<input type="text" name="txtrto" placeholder="RTO">
				</td>
				
			</tr>
			<tr>
				<td colspan="2"  style="padding:8px;">
					<input type="text" name="txtofficer" placeholder="Asst Officer">
				</td>
			</tr>
			<tr>
				<td colspan="2"  style="padding:8px;">
					<input type="text" name="txtnum" placeholder="Registration code">
				</td>
			</tr>
			<tr>
				<td style="padding:8px;">
					Signature
				</td style="padding:8px;">
				<td>
					<input type="file" name="file" placeholder="signature">
				</td>
			</tr>
			<tr>
				<td  style="padding:8px;">
					<h4>Learners Test date</h4>
				</td>
				<td  style="padding:8px;">
					<h4>Diving Test date</h4>
				</td>
			</tr>
			
			
				<tr>
					<td style="padding:8px;"><input type="checkbox" name="day[]" value="Sun"/>Sunday</td>
					<td style="padding:8px;"><input type="checkbox" name="dday[]" value="Sun"/>Sunday</td>

				</tr>
				<tr>
					<td style="padding:8px;"><input type="checkbox" name="day[]" value="Mon"/>Monday</td>
					<td style="padding:8px;"><input type="checkbox" name="dday[]" value="Mon"/>Monday</td>
				</tr>
				<tr>
					<td style="padding:8px;"><input type="checkbox" name="day[]" value="Tue"/>Tuesday</td>

					<td style="padding:8px;"><input type="checkbox" name="dday[]" value="Tue"/>Tuesday</td>
					</tr>
				<tr>
					<td style="padding:8px;"><input type="checkbox"  name="day[]" value="Wed"/>Wednessday</td>
					<td style="padding:8px;"><input type="checkbox"  name="dday[]" value="Wed"/>Wednessday</td>

					</tr>
				<tr>
					<td style="padding:8px;"><input type="checkbox"  name="day[]" value="Thu"/>Thursday</td>
					<td style="padding:8px;"><input type="checkbox"  name="dday[]" value="Thu"/>Thursday</td>

					</tr>
				<tr>
					<td style="padding:8px;"><input type="checkbox"  name="day[]" value="Fri"/>Friday</td>
					<td style="padding:8px;"><input type="checkbox"  name="dday[]" value="Fri"/>Friday</td>

					</tr>
				<tr>
					<td style="padding:8px;"><input type="checkbox"  name="day[]" value="Sat"/>Saturday</td>
					<td style="padding:8px;"><input type="checkbox"  name="dday[]" value="Sat"/>Saturday</td>

					</tr>
			<tr>
				<td  style="padding:8px;" colspan="2">
					<input type="submit" name="btnsubmit" value="Add">
				</td>
			</tr>
			</table>
			
		</div>
		</div>
		 
		</form>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include("connection.php");
			$rto=$_POST["txtrto"];
			$code=$_POST["txtnum"];
			$officer=$_POST["txtofficer"];
			/* $ldate=$_POST["ldate"];
			$ddate=$_POST["ddate"]; */
			$file="";
		$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "rtosign/";
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
			$s="insert into rto (rto,name,signature,code)values('$rto','$officer','$file',$code`)";
			mysqli_query($con,$s);
			//echo $s;
			$r=mysqli_query($con,"select max(rto_id) from rto");
			$rid=mysqli_fetch_assoc($r);
			$rtid=$rid['max(rto_id)'];
			//echo $rtid;
			
			$licType = $_REQUEST['day']; 
			$p = implode(',',$licType);
			$x=count($licType);
			for($i = 0;$i<$x;$i++)
			{
				$ldate = $licType[$i];
				//echo $ldate."<br/>";
				$sq="insert into learnerstestdate (rto_id,rto,testdate) values($rtid,'$rto','$ldate')";
				mysqli_query($con,$sq);
				//echo $sq;
				//echo $licType[$i];
				
			}
			
			
			$ddate = $_REQUEST['day']; 
			$p = implode(',',$ddate);
			$x=count($ddate);
			for($i = 0;$i<$x;$i++)
			{
				$drdate = $ddate[$i];
				//echo $drdate."<br/>";
				$sqq="insert into driving_test_date (rto_id,rto,day) values($rtid,'$rto','$drdate')";
				mysqli_query($con,$sqq);
				//echo $sqq;
				//echo $licType[$i];
				
			}
			
			
		}
		?>
	</body>
</html>