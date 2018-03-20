<?php
include("connection.php");
?>
<form action="" method="post">
				<input type="file" name="file">
				<input type="file" name="file1">
				<input type="file" name="file2">
				<input type="submit" name="submit">
			</form>
		
		<?php
		if(isset($_POST["submit"]))
		{
			$file="";
			$file=$_FILES["file"]["name"];
			if( $_FILES['file']['name'] != "" )
			{
				$target_path = "noc/";
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
		}
?>