<?php
include("connection.php");
session_start();
?>
<html>
	<head>
	
		<style>
			.div1{
		color:black;
		border-style: solid;
		border-color: red green blue yellow;
	    padding:20px 20px 20px 10px;
		margin:200px;
		width:60%;
		height:80%;
	}
	h1{
		padding:10px;
		color:#432345;
		
		font-family:landscape;
		font-variant: small-caps;
	}
input[type=text]{
	color:black;
    width: 30%;
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
	<br>
	<br>
	<br>
	<br>
	<?php include("header.html");
	include("connection.php");
	/*$sq=mysqli_query($con,"select max(learners_id) from learnersreg");
	
			while($row=mysqli_fetch_array($sq))
			{
			   $lic_id=$row[0];
			   break;
			}
		//echo  $lic_id;*/
		$email=$_SESSION["email"];
					echo $email;
					$lic=mysqli_query($con,"select * from learnersreg where email='$email'");
					//echo $lic;
					while($row=mysqli_fetch_assoc($lic))
					{
						$l=$row["learners_id"];
					}
					echo $l;
					$tot1=0;
					echo"<div class='div1'><h1>Remittance Details</h1>";
		$s=mysqli_query($con,"SELECT fee.`class`,fee.`fee`,fee.`cess`,fee.`fee`+fee.`cess` tot FROM learners_class class inner join `learnersfee` fee on class.class=fee.class and class.learners_id='$l'");
		while($row=mysqli_fetch_assoc($s))
		{
			//$s=mysqli_query($con,"SELECT fee.`class`,fee.`fee`,fee.`cess`,fee.`fee`+fee.`cess` tot FROM learners_class class inner join `learnersfee` fee on class.class=fee.class and class.learners_id='$lic_id'");
				/*echo"<br>";
			echo "fee"; echo $row['fee'];
			echo"<br>";
			echo "cess"; echo $row['cess'];
			echo"<br>";
			echo "tot"; echo $row['tot'];*/
			$tot1=$tot1+$row['tot'];
			echo"<font color='#8b6753'><b>";
			echo $row['class'];
			echo"</b></font>";
			echo "
		<form method='post' action=''>
		<br>
		<br>
		Fee:<input type='text' name='txtfee' readonly='readonly' value='".$row['fee']."'>
		Cess:<input type='text' name='txtcess' readonly='readonly' value='".$row['cess']."'><br><br>";
		
		
		}
		echo "<br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total amount you need to pay&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type='text' readonly='readonly' name='txttot' value='$tot1'>
		<input type='submit' name='btnpay' value='Pay'>
			</form></div>";
		if(isset($_POST["btnpay"]))
		{
			$total=$_POST["txttot"];
			$n="insert into fee_paid(learners_id,tot) values ($l,$tot1)";
			mysqli_query($con,$n);
			echo $n;
		}
		?>
		
		
		<?php include("footer.php");?>
	</body>
</html>