<select name="type_post" required id="type_post" onchange="get_data(this.value)" >
     <option value="Select Post Type" selected>Select Post Type</option>
     <option value="Airmail" >Airmail</option>
     <option value="Airmail AD">Airmail AD</option>
     <option value="Airmail Speed Post">Airmail Speed Post</option>
     <option value="Speed Post">Speed Post</option>
     <option value="Book Post">Book Post</option>
     <option value="Ordinary Post">Ordinary Post</option>
     <option value="Registered Post">Registered Post</option>
     <option value="Registered AD">Registered AD</option>
     <option value="Registered Parcel">Registered Parcel</option>
     <option value="Parcel">Parcel</option>
     <option value="Courier">Courier</option>
 </select>
 <script>
 function get_data(value){
    $.ajax({
        url: "nameof ajax file .php",
        type: "POST",
        dataType: "HTML",
        async: false,
        data: {value: value}
        success: function(data) {
           //here we can populate the required fields based on value from database                
        }
     });
 }
 </script>
 <?php
 /*("localhost", "root", "") or die(mysql_error());
mysql_select_db("disp") or die(mysql_error());*/
include("connection.php");
$type_post = (filter_input(INPUT_POST, 'type_post'));

$q = mysql_query("select value_frank from frank where type_post='" . $type_post . "'") or die(mysql_error());
$value_frank = mysql_fetch_row($q);
$val_fra = $value_frank;

echo $val_fra;
?>