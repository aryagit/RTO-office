<?php
 	include("connection.php");
						
  $query = "SELECT rto_id,rto FROM rto";
  $result = $con->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['rto_id'], "val" => $row['rto']);
  }

  $query = "SELECT tstdate_id, rto_id, testdate FROM learnerstestdate";
  $result = $con->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['rto_id']][] = array("id" => $row['tstdate_id'], "val" => $row['testdate']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);


?>
<style>
.div1{
	padding:200px 500px 500px 500px;
	
}


</style>
<!docytpe html>
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
    <script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);          
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
      }
    </script>

  </head>

  <body onload='loadCategories()'>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-diamond"></i>Akshara</a>
            </div>
            <div class="navbar-collapse collapse">
                <!-- Left nav -->
                <ul class="nav navbar-nav navbar-right">
                    <li id="ctl00_home" class="active"><a href="index.aspx.html">Home</a></li>
                    <li id="ctl00_service"><a href="learners.php">Learners</a></li>
                    <li id="ctl00_portfolio"><a href="vehiclereg.php">Vehicle Registration</a></li>
                    <li id="ctl00_blog" class="dropdown"><a href="blog.aspx.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span id="ctl00_Span1" class="caret"></span></a>
                        <ul class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li><a href="vehicletransfer.php">VehicleTransfer</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li id="ctl00_contact"><a href="contact.htm">Contact</a></li>
                    <li>
                        <!-- add search form -->
                        <div class="navbar-form" role="search">
                            <div class="input-group">
                                <input name="ctl00$txtsearch" type="text" id="ctl00_txtsearch" placeholder="Search this site" class="form-control" />
                                <span class="input-group-btn">
                                    <a id="ctl00_lbsearch" title="Search" class="btn btn-default" href="javascript:__doPostBack('ctl00$lbsearch','')"><i class="glyphicon glyphicon-search"></i></a>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li id="ctl00_login"><a href="userlogin.php">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	<br>
	<br><br>
	<form action="" method="post">
	<div class="div1">
    <table class="tbl" cellspacing="8" cellpadding="8" style="padding:20px 0px 10px 40px;">
		<tr>
			<td>Rto Office</td>
			<td><select id='categoriesSelect' name="rto">
			</select></td>
		</tr>
		<tr>
			<td>Slot Date</td>
			<td><select id='subcatsSelect' name="slotdate">
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
	</div>
	</form>
	<?php
	if(isset($_POST["submit"]))
	{
		include("connection.php");
		$rto=$_POST["rto"];
		$slotdate=$_POST["slotdate"];
		$d=mysqli_query($con,"select * from learnerstestdate");
		
		while($row=mysqli_fetch_assoc($d))
			{
			   $date=$row["testdate"];
			   break;
			}
		if($slotdate==$date)
		{ 	
			$cc=mysqli_query($con,"select * from testdate_count");
			$count=0;
			while($row=mysqli_fetch_assoc($cc))
			{
			   $count=$row["count"];
			   break;
			}
			if($count<10)
			{
				$c=$count+1;
				$n="UPDATE `testdate_count` SET `count`='$c',`testdate`='$slotdate'";
				mysqli_query($con,$n);
				//$sq=mysqli_query($con,"select max(learners_id) from learnersreg");
	
					//while($row=mysqli_fetch_assoc($sq))
					//{
					  // $lic_id=$row["learners_id"];
					   //$district=$row["district"];
					   //$rto=$row["taluk"];
					   //break;
				//	}
				$s="insert into slotbooking (testdate) values ('$slotdate')";
				mysqli_query($con,$s);
				echo $s;
			}
		}
		else{
			echo "already booked";
		}
		
		
	}
	?>
  </body>
</html>