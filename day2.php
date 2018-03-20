

<html>
<body>
<form method="post">
<p>Click the button to display todays day of the week.</p>
<select name="rto">
<?php
include("connection.php");
$s=mysqli_query($con,"select * from rto");
while($row=mysqli_fetch_assoc($s))
		{
			echo "<option value='$row[rto_id]'>$row[rto]</option>";
		}
		
			?>
</select>

<input type="date" id="myDate">
<button type="submit" name="btnSubmit" onclick="myFunction()">Try it</button>
<input type="hidden" name="hidDayName"> 
<input type="text" name="txtDayName">
<p id="demo"></p>
<p id="demo1"></p>
<?php
if(isset($_POST["btnSubmit"]))
{
$rto=$_POST["rto"];
$ss=mysqli_query($con,"select * from learnerstestdate where rto='$rto'");
while($row=mysqli_fetch_assoc($ss))
		{
			echo "<input type=hidden name=hidDay value=$row[testdate]>";
		
			
		}
		//echo $day;
}		//echo $day;
?>
</form>
<script>
function myFunction() {
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

  
	var daypart=new Date(document.getElementById("myDate").value);
	var x=weekday[daypart.getDay()];
    document.getElementById("demo").innerHTML = x;
	   document.getElementById("hidDayName").innerHTML = x;
	  document.getElementById("txtDayName").innerHTML = x;
	//var val=document.getElementById("hidDay").value;
	  //document.getElementById("demo1").innerHTML = val;
}
</script>

</body>
</html>