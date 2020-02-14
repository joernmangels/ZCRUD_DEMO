<?php
mysql_connect("192.168.2.180","root","");
mysql_select_db("TESTUSER"); 
$email = $_POST['Email'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$age = $_POST['Age'];
$address = $_POST['Address'];
$query = "INSERT INTO personal2(email, firstname, lastname, age, address)
VALUES('$email', '$firstname', '$lastname', '$age', '$address')";
mysql_query($query) or die ("Query save failed : ". mysql_error());
?>