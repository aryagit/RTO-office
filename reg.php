
<?php
include("connection.php");

$s=mysqli_query($con,"select * from vehicle_reg where regno='kl-03-6787' and chassisno='juuuh'");
		while($row=mysqli_fetch_assoc($s))
			
			{
				$vreg=$row["vreg_id"];
			}
			echo $vreg;
			?>