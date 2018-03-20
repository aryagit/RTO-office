
<?php
include("header.html");
include("connection.php");
$ss=mysqli_query($con,"select * from learnerstestdate where rto='konni'");
	while($row=mysqli_fetch_array($ss))
			{
				$day=$row[3];
				break;
			}
			echo $day;
?>


















<html>
<body>

<p>Click the button to display todays day of the week.</p>
<select name="rto">
<?php
include("connection.php");
$s=mysqli_query($con,"select * from rto");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[1]</option>";
			$rto_id=$row[0];
		}
		
			?>
</select>

<input type="date" id="myDate">
<button onclick="myFunction()">Try it</button>
<?php echo $rto_id;	?>
<p id="demo"></p>
<?php
$ss=mysqli_query($con,"select * from learnerstestdate where rto_id='$rto_id'");
while($row=mysqli_fetch_array($ss))
		{
			$day=$row[2];
			
		}
		//echo $day;
		//echo $day;
?>
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

   // var n = weekday[d.getDay()];
	var daypart=new Date(document.getElementById("myDate").value);
//	alert(daypart.getDay());
  //  day = date.daypart;
	
//	alert(daypart);
	var x=weekday[daypart.getDay()];
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>