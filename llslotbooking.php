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
		<h3>LL Test Appointments</h3>
		<form method="post" action="llslotbooking1.php">
			<table cellpadding="6" cellspacing="6">
				
				<!--<tr>
					<td><input type="radio" name="llslot" value="appno" checked>Application Number</td>
					<td><input type="radio" name="llslot" value="llno">Learners License Number</td>
				</tr>-->
				<tr>
					<td>Application Number<font color="red">*</font></td>
					<td><input type="text" name="txtappno"></td>
				</tr>
				<tr>
					<td>Applicant Date of Birth<font color="red">*</font></td>
					<td><input type="date" name="txtdob" placeholder="dd/mm/yyyy"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
					<td><input type="reset" name="reset"></td>
				</tr>
				
			</table>
			
		</form>
		</div>
		<?php include("footer.php");?>
	</body>
</html>