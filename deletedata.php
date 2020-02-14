<?php
mysql_connect("192.168.2.180","root","");
mysql_select_db("TESTUSER"); 
$email = $_POST['Email'];
$query = "DELETE FROM personal2 WHERE email = '$email'";
mysql_query($query) or die ("Query save failed : ". mysql_error());
?>