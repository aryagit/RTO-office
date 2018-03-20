 <?php
include("connection.php"); 
?>
 <html>
 <head>
 </head>
 <body>
 <form action="" method="post">
 <table>
	<tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea name="addque" cols="60" rows="2" id="addque"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input name="ans4" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST["submit"]))
{
	$addque=$_POST["addque"];
	$ans1=$_POST["ans1"];
	$ans2=$_POST["ans2"];
	$ans3=$_POST["ans3"];
	$ans4=$_POST["ans4"];
	$anstrue=$_POST["anstrue"];
	$s="insert into mst_question(ques,ans1,ans2,ans3,ans4,true_ans) values ('$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')";
	mysqli_query($con,$s);
	echo $s;
}
?>
</body>
</html>