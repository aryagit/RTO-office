<html>
	<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" ><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" /><meta name="description" content="dot net templates  | aspxtemplates.com" /><meta name="author" content="aspxtemplates.com" />
    <!-- Bootstrap Core CSS -->
    <title>
	Akshara Portfolio - Bootstrap Template
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet" /><link href="css/owl/owl.carousel.css" rel="stylesheet" type="text/css" /><link href="css/owl/owl.theme.css" rel="stylesheet" type="text/css" /><link href="css/owl/owl.transitions.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet" type="text/css" /><link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,700" rel="stylesheet" type="text/css" />
    <!-- Required plugin - Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css" /><link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->  
	

	<style>

	body  {
		background-image: url("img/12.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		color:white;
	}
	td{
		padding:5px;
		/* padding:10px 0px 10px 10px; */
	}
	.div1{
		color:white;
		border-style: solid;
		border-color: red green blue yellow;
	    background-repeat: no-repeat, repeat;
	    background-image: url("img/14.jpg");
	    background-blend-mode: lighten;
   	   
	}
	
	h3{
		color:#894878
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

	  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-diamond"></i>RTO</a>
            </div>
            <div class="navbar-collapse collapse">
                <!-- Left nav -->
                <ul class="nav navbar-nav navbar-right">
                    <li id="ctl00_home" class="active"><a href="index.html">Home</a></li>
                    <li id="ctl00_service"><a href="learners.php">Learners Registration</a></li>
					<li id="ctl00_service"><a href="account.php?q=1php">Learners test</a></li>
                   <!-- <li id="ctl00_portfolio"><a href="date.php">Slote booking</a></li>
					<li id="ctl00_portfolio"><a href="llpayment1.php">Learners Payment</a></li> -->
                    <li id="ctl00_blog" class="dropdown"><a href="vehicletransfer.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehicle Transfer<span id="ctl00_Span1" class="caret"></span></a>
                        <ul class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li><a href="vehiclereg.php">Vehicle Registration</a></li>
                            <li><a href="vehicletransfer.php">Vehicle Transfer</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li id="ctl00_contact"><a href="logout.php">Logout</a></li>
                    <!--<li>
                        add search form
                        <div class="navbar-form" role="search">
                            <div class="input-group">
                                <input name="ctl00$txtsearch" type="text" id="ctl00_txtsearch" placeholder="Search this site" class="form-control" />
                                <span class="input-group-btn">
                                    <a id="ctl00_lbsearch" title="Search" class="btn btn-default" href="javascript:__doPostBack('ctl00$lbsearch','')"><i class="glyphicon glyphicon-search"></i></a>
                                </span>
                            </div>
                        </div>
                    </li>-->
                   <!-- <li id="ctl00_login"><a href="userlogin.php">login</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
	<br><br><br>
		<form action="date.php" method="post" enctype="multipart/form-data">
		<div class="div1">
		<h3>Personal Details</h3>
			<table cellspacing="5" cellpadding="5" style="color:white;
		padding:20px 0px 10px 40px;">
			<tr>
				<td colspan="2">Name:</td>
				<td><input type="text" name="txtfname"/></td>
				<td><input type="text" name="txtmname"/></td>
				<td><input type="text" name="txtlname"/></td>
			</tr>
			<tr>
				<td>Relation</td>
				<td ><select name="relation">
				<option>Father</option>
				<option>Mother</option>
				<option>Husband</option></select></td>
				<td><input type="text" name="txtrfname"/></td>
				<td><input type="text" name="txtrmname"/></td>
				<td><input type="text" name="txtrlname"/></td>
			</tr>
			<tr>
				<td colspan="2">Sex</td>
				<td><input type="radio" name="sex" value="m" checked/>Male<input type="radio" name="sex" value="f"/>Female</td>
				<td>Date of Birth</td><td><input type="date" name="dob" placeholder="dd/mm/yyyy"/></td>
				<td>Age</td><td><input type="text" name="txtage"/>ys</td>
			</tr>
			<tr>
				<td colspan="2">Place of Birth</td>
				<td><input type="text" name="txtplaceofbirth"/></td>
				<td>Country of Birth</td>
				<td><select name="country">
					<option>india</option>
					<option>australia</option>
					<option>usa</option>
					<option>uk</option>
					<option>london</option>
					<option>canada</option></select></td>
			</tr>
			<tr>
				<td colspan="2">Educational Qualification</td>
				<td><select name="education">
					<option>PHD</option>
					<option>Mphil</option>
					<option>PostGraduate</option>
					<option>Graduation</option>
					<option>Plus two</option>
					<option>SSLC</option></select></td>
				<td>Blood Group</td>
				<td><select name="blood">
					<option>A+</option>
					<option>B+</option>
					<option>O+</option>
					<option>A-</option>
					<option>B-</option>
					<option>O-</option>
					<option>AB-</option></select></td>
			</tr>
			<tr>
				<td colspan="2">Mobile no:</td>
				<td><input type="number" name="txtmobile"/></td>
				<td>Email</td>
				<td><input type="email" name="txtemail"/></td>
			</tr>
			<tr>
				<td colspan="2">ID proof</td>
				<td>1.Adhaar:</td>
				<td><input type="file" name="file"></td>
				</tr>
			<!--<tr>
				<td></td><td></td>
				<td>2.Voter id:</td>
				<td><input type="file" name="file1"/></td>
			</tr>-->
			<tr>
				<td colspan="2">Identification mark</td>
				<td>1.<input type="text" name="txtidentificationmark1"/></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>2.<input type="text" name="txtidentificationmark2"/></td>
			</tr>
			</table>
		</div>
		<br>
		<div class="div1">
			<h3>Address Details</h3>
			<table cellspacing="5" cellpadding="5" style="color:white;
		padding:20px 0px 10px 40px;">
			<tr>
				<td>State</td>
				<td><select name="state">
					<option>Kerala</option>
					<option>Tamil Nadu</option>
					<option>Karnataka</option>
					<option>Rajasthan</option>
					<option>Goa</option>
					<option>Delhi</option>
					<option>Mumbai</option>
					<option>Maharastra</option>
					<option>Orissa</option>
					<option>UP</option></select></td>
					<td></td><td></td>
				<td>Address</td>
				<td>Line 1:</td>
				<td><input type="text" name="txtaddress1" /></td>
			<tr>
			
				<td>District</td>
				<td colspan="4"><select name="district">
					<option>Trivandram</option>
					<option>Kollam</option>
					<option>Pathanamthitta</option>
					<option>Alappuzha</option>
					<option>Kottayam</option>
					<option>Ernakulam</option>
					<option>idukki</option>
					<option>palakkadu</option>
					<option>Trissur</option>
					<option>Kozhikodu</option></select></td>
				<td>Line 2:</td>
				<td><input type="text" name="txtaddress2"/></td>	
			</tr>
			<tr>
				<td>Taluk</td>
				<td colspan="4"><input type="text" name="txttaluk"/></td>
				<td>Line 3:</td>
				<td><input type="text" name="txtaddress3"/></td>	
			</tr>
			<tr>
				<td>Village</td>
				<td colspan="4"><input type="text" name="txtvillage"/></td>
				<td>Pincode:</td>
				<td><input type="number" name="txtpincode"/></td>	
			</tr>
			</table>
			
		</div>
		<br>
		<div class="div1">
		<h3>Select class of vehicles</h3>
			<table cellspacing="5" cellpadding="5" style="color:white;
		padding:20px 0px 10px 40px;">
				<tr>
					<td><input type="checkbox" name="cob[]" value="checkmcwog" checked/>Motor cycle without gear(Non Transport)(MCWOG)</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="checklmv"/>LMV-NT(LMV)</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="checklmv3"/>LMV-3 Wheeler NT(3W-NT)</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="checklmvtractor"/>LMV-Tractor-NT(TRACTOR</td>
				</tr>
				<tr>
					<td><input type="checkbox"  name="cob[]" value="checkecart"/>E-CART(eCART)</td>
				</tr>
				<tr>
					<td><input type="checkbox"  name="cob[]" value="checkrickshaw"/>E-RICKSHAW(eRIKSH)</td>
				</tr>
			
			</table>
		</div>
			<table cellspacing="5" cellpadding="5"> 
			<tr>
				<td><input type="submit" name="btnLearners" value="Save"/></td>
				
				<td><input type="reset" name="reset" value="Reset"/></td>
			</tr>
		</table>
	</form>		
	<?Php
	if(isset($_POST["save"]))
	{
		include("connection.php");
		$fname=$_POST["txtfname"];
		$mname=$_POST["txtmname"];
		$lname=$_POST["txtlname"];
		$relation=$_POST["relation"];
		$rfname=$_POST["txtrfname"];
		$rmname=$_POST["txtrmname"];
		$rlname=$_POST["txtrlname"];
		$sex=$_POST["sex"];
		$dob=$_POST["dob"];
		$age=$_POST["txtage"];
		$pob=$_POST["txtplaceofbirth"];
		$cob=$_POST["country"];
		$education=$_POST["education"];
		$blood=$_POST["blood"];
		$phn=$_POST["txtmobile"];
		$email=$_POST["txtemail"];
		$identification1=$_POST["txtidentificationmark1"];
		$identification2=$_POST["txtidentificationmark2"];
		$state=$_POST["state"];
		$district=$_POST["district"];
		$taluk=$_POST["txttaluk"];
		$village=$_POST["txtvillage"];
		$line1=$_POST["txtaddress1"];
		$line2=$_POST["txtaddress2"];
		$line3=$_POST["txtaddress3"];
		$pin=$_POST["txtpincode"];
		$vehicleclass=$_POST["cob"];
		$file="";
		$file=$_FILES["file"]["name"];
		if( $_FILES['file']['name'] != "" )
		{
			$target_path = "learners/";
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
		$regdate=date("Y")."-".date("m")."-".date("d");
		$s="insert into learnersreg (fname,mname,lname,relation,rfname,rmname,rlname,sex,dob,age,pob,cob,education,blood,phn,email,idproof1,identification1,identification2,state,district,taluk,village,line1,line2,line3,pin,regdate) values ('$fname','$mname','$lname','$relation','$rfname','$rmname','$rlname','$sex','$dob','$age','$pob','$cob','$education','$blood',$phn,'$email','$file','$identification1','$identification2','$state','$district','$taluk','$village','$line1','$line2','$line3','$pin','$regdate')";
		mysqli_query($con,$s);
		echo $s;
		$sq=mysqli_query($con,"select max(learners_id) from learnersreg");
	
			while($row=mysqli_fetch_array($sq))
			{
			   $lic_id=$row[0];
			   break;
			}
	
		
		echo $lic_id;
		
		$licType = $_REQUEST['cob']; 
		$p = implode(',',$licType);
		$x=count($licType);
		for($i = 0;$i<$x;$i++)
	 		{
				$p = $licType[$i];
				echo $p."<br/>";
				$ss="insert into learners_class (learners_id,class) values ($lic_id,'$p')";
				mysqli_query($con,$ss);
				
				//echo $licType[$i];
				
			}
header("location:date.php");
	}
	?>
	
	</body>
</html>