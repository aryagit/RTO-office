<html>
	<head>
		<style>
			.div1{
				width:80%;
				height:50%;
				margin:70px;
				border-style: solid;
				padding:20px;
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
	<form action="" method="post"> 
	<div class="col-md-6"> 
		<div class="div1">
			<br><br><select name="class">
				<option>LMV-NT(LMV)</option>
				<option>LMV-3 Wheeler NT(3W-NT)</option>
				<option>LMV-Tractor-NT(TRACTOR)</option>
				<option>E-CART(eCART)</option>
				<option>E-RICKSHAW(eRIKSH)</option>
				
			</select><br><br>
			<input type="text" name="txtfee" placeholder="Fee"><br><br>
			<input type="text" name="txtcess" placeholder="Cess"><br><br>
			<input type="submit" name="btnsubmit" value="Add">
			<input type="submit" name="btnview" value="View"><br><br>
			
			
		</div>
		</div>
		 
		</form>
		<?php
		if(isset($_POST["btnview"]))
		{
			include("connection.php");
			echo"<div class='col-md-6'>
			<div class='div2'>
			<table>
				<tr>
					<th style='padding:8px;'>Class</th><th style='padding:8px;'>Fee</th><th style='padding:8px;'>Cess</th>
				</tr>";
			$ss=mysqli_query($con,"select * from learnersfee");
			while($row=mysqli_fetch_array($ss))
			{
				$id=$row[0];
				echo "
							<tr>
								<td style='padding:8px;'>$row[1]</td>
								<td style='padding:8px;'>$row[2]</td>
								<td style='padding:8px;'>$row[3]</td>
								<td style='padding:8px;'><form action='classfeeedit.php' method='post'><input type='hidden' name='h1' value='$id'><input type='submit' name='btnedit' value='Edit'></form></td>
								
							</tr>";
				     
			}
			echo"</table>
			</div> 
			
		</div> ";
		}
		?>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include("connection.php");
			$fee=$_POST["txtfee"];
			$cess=$_POST["txtcess"];
			$class=$_POST["class"];
			$s="insert into learnersfee (class,fee,cess) values('$class','$fee','$cess')";
			mysqli_query($con,$s);
			echo "<script>alert('Insert $class');</script>";
		}
		
		?>
	</body>
	
</html>