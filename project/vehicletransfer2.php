	<?php include("header.html");?>	
	<?php
	include("connection.php");
		if(isset($_POST["submit"]))
		{
			$bname=$_POST["txtbname"];
			$baddress=$_POST["txtaddress"];
			$dob=$_POST["txtdob"];
			$age=$_POST["txtage"];
			$adhaarno=$_POST["txtadhaar"];
		$file="";
		$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "RcBook/";
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
		$file1="";
		$file1=$_FILES["file1"]["name"];
		if( $_FILES['file1']['name'] != "" )
		{
			$target_path = "insurance/";
			$target_path = $target_path.basename( $_FILES['file1']['name']); 
			if(move_uploaded_file($_FILES['file1']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file1']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$file2="";
		$file2=$_FILES["file2"]["name"];
		if( $_FILES['file2']['name'] != "" )
		{
			$target_path = "PollutionCert/";
			$target_path = $target_path.basename( $_FILES['file2']['name']); 
			if(move_uploaded_file($_FILES['file2']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file2']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$file3="";
		$file3=$_FILES["file3"]["name"];
		if( $_FILES['file3']['name'] != "" )
		{
			$target_path = "buyeraddress/";
			$target_path = $target_path.basename( $_FILES['file3']['name']); 
			if(move_uploaded_file($_FILES['file3']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file3']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$file4="";
		$file4=$_FILES["file4"]["name"];
		if( $_FILES['file4']['name'] != "" )
		{
			$target_path = "buyerid/";
			$target_path = $target_path.basename( $_FILES['file4']['name']); 
			if(move_uploaded_file($_FILES['file4']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file4']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$file5="";
		$file5=$_FILES["file5"]["name"];
		if( $_FILES['file5']['name'] != "" )
		{
			$target_path = "buyerimg/";
			$target_path = $target_path.basename( $_FILES['file5']['name']); 
			if(move_uploaded_file($_FILES['file5']['tmp_name'], $target_path)) 
			{
				echo "The file ".basename( $_FILES['file5']['name'])." has been uploaded";
			} 
			else
			{
				echo "There was an error uploading the file, please try again!";
			}

				// copy( $_FILES['file']['name'], "/SendEmail" ) or 
				//       die( "Could not copy file!");
		}
		$s=mysqli_query($con,"select * from vehicle_reg where regno='kl-03-6787' and chassisno='juuuh'");
		while($row=mysqli_fetch_assoc($s))
			
			{
				$vreg=$row["vreg_id"];
			}
			echo $vreg;
		$ss="insert into vehiclebuyer_details (vreg_id,bname,baddress,adhaarno,dob,age,addressproof,idproof,photo,insurance,rcbook,pollution)
		values($vreg,'$bname','$baddress',$adhaarno,'$dob',$age,'$file3','$file4','$file5','$file1','$file','$file2')";
		mysqli_query($con,$ss);
		echo $ss;
		echo"<marquee>succefull</marquee>";
	
	}	
?>