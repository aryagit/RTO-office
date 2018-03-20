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
		height:60%;
	}
	h1{
		padding:10px;
		color:#432345;
		
		font-family:landscape;
		font-variant: small-caps;
	}
input[type=number]{
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
		 <script>
        var x = 0;
        var y = 0;
        var z = 0;
        function calc(obj) {
            var e = obj.id.toString();
            if (e == 'tb1') {
                x = Number(obj.value);
                y = Number(document.getElementById('tb2').value);
            } else {
                x = Number(document.getElementById('tb1').value);
                y = Number(obj.value);
            }
            z = x + y;
            document.getElementById('total').value = z;
            document.getElementById('update').innerHTML = z;
        }
    </script>
	</head>
	<body>
	<?php include("header.html");?>
		<div class="div1">
		
		<h1>Remittance Details</h1>
		<form method="post" action="">
		Fee:<input type="number" name="txtfee" id="tb1" onkeyup="calc(this)">
		Cess:<input type="number" name="txtcess" id="tb2" onkeyup="calc(this)">
		Total:<input type="number" id="total" name="total" value="0" />
		<br><br>
		<input type="submit" name="submit">
		<input type="reset" name="reset">
		
			
			
		</form>
		<?php
			if(isset($_POST['submit']))
			{
				$tot=$_POST["total"];
				$fee=$_POST["txtfee"];
				$cess=$_POST["txtcess"];
				//$Cf=$_POST["txtcf"];
				//$sc=$_POST["txtsc"];
				$email=$_SESSION["email"];
					//echo $email;
					$lic=mysqli_query($con,"select * from learnersreg where email='$email'");
					//echo $lic;
					while($row=mysqli_fetch_assoc($lic))
					{
						$l=$row["learners_id"];
						$name=$row["fname"];
					}
					//echo $l;
					$pdate=date("Y")."-".date("m")."-".date("d");
				$s="insert into learners_pay (learners_id,name,fee,cess,tot,paiddate) values ($l,'$name',$fee,$cess,$tot,'$pdate')";
				mysqli_query($con,$s);
				//echo $s;
			}
		?>
		</div>
		
		<?php include("footer.php");?>
	</body>
</html>