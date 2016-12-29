<?php 
$dbhost = 'localhost';
   $dbuser = 'thehacka';
   $dbpass = '1vISl7ma08';
   $dbname = "thehacka_marko";
//Sql connect
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$conn){
    die ('could not connect' . mysql_error());
   }
$select_db = mysql_select_db($dbname);
$zura = mysql_query('SELECT * FROM count') ;
$counter = mysql_fetch_row($zura);
$counter = $counter[0];
?>