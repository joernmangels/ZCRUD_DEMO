<?php
mysql_connect("192.168.2.180","root","");
mysql_select_db("TESTUSER"); 
$email = $_POST['Email'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$age = $_POST['Age'];
$address = $_POST['Address'];
$query = "UPDATE personal2 SET firstname = '$firstname', lastname = '$lastname', age = '$age', address = '$address' WHERE email = '$email'";
mysql_query($query) or die ("Query save failed : ". mysql_error());
?>