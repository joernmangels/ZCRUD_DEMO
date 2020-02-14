<?php
header('Content-Type: application/json');
 
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
$pdo = new PDO('mysql:host=192.168.2.180;dbname=TESTUSER', 'root', 'deeuu001');

$rows = array();

$sql = "SELECT * FROM personal2";
foreach ($pdo->query($sql) as $row) {
//   echo $row['firstname']." ".$row['lastname']."<br />";
//   echo "E-Mail: ".$row['email']."<br /><br />";

     $rows[] = $row;
}
//print_r ($rows);


//mysql_connect("192.168.2.180","root","");
//mysql_select_db("TESTUSER"); 

//$sth = mysql_query("SELECT * FROM personal");
//$rows = array();
//while($r = mysql_fetch_assoc($sth)) {
//    $rows[] = $r;
//}

//$anzahl = count ( $rows );
//echo "<p>Es gibt $anzahl Eintraege</p>";


$baris = array('UserSet' => $rows);
//$anzahl = count ( $baris );
//echo "<p>Es gibt $anzahl Eintraege</p>";

print json_encode($baris);
//print_r ($baris);
?>