<html>
	<head>
		<style>
			.div1{
		color:white;
		width:50%;
		height:50%;
		padding:20px;
		margin:80px;
		border-style: solid;
		border-color: red green blue yellow;
			}
			input[type=text]{
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
		<?php
		include("adheader.html");
		if(isset($_POST['btnedit']))
		{
		  include("connection.php");
		  $v=$_POST["h1"];
		 $s=mysqli_query($con,"select * from learnersfee where lid=$v");
		  while($row=mysqli_fetch_array($s))
		  {
		   
		  $cls=$row[1];
		  $fee=$row[2];
		 
		  $cess=$row[3];
		  }
		  
		}
		  ?>
		  <form method="post">
		  <div class="div1">
			<input type="text" readonly name="txtclass" value="<?php echo $cls; ?>"><br><br>
			<input type="text" name="txtfee" value="<?php echo $fee; ?>"><br><br>
			<input type="text" name="txtcess" value="<?php echo $cess; ?>"><br><br>
			<input type="submit" name="edit" value="Edit">
		  </div>
		  </form>
		  <?php
		  if(isset($_POST["edit"]))
		  {	
				include("connection.php");
			  $clss=$_POST["txtclass"];
			  $feee=$_POST["txtfee"];
			  $cesss=$_POST["txtcess"];
			  $s="update learnersfee set  fee=$feee,cess=$cesss where class='$clss'";
			  mysqli_query($con,$s);
			 // echo $s;
			  echo "<script>alert('$clss is sucessfully Updated');</script>";
			  header('location:learnersclassfee.php');
		  }
		  
		  ?>
	</body>
</html>
	