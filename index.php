<?php
include_once ('db.php');
//Write error
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "#########ERROR###########" );
//Db connect
include_once ('header.php');
//Write
$query = $handler->prepare("
INSERT INTO `user-information` (`ip`,`useragent`,`refferer`)VALUES(:ip,:useragent,:refferer)");

$query->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
$query->bindParam(':useragent', $_SERVER['HTTP_USER_AGENT']);
$query->bindValue(':refferer', $_SERVER['HTTP_REFERER']?$_SERVER['HTTP_REFERER']:'no ref');
//$query->bindValue(':date', date("m-d H:i"));
$query->execute();
$handler1 =null;
//Redirect

$result = $handler->prepare("SELECT * FROM `redirect_sites`");
$result->execute();

for($i=0; $row = $result->fetchall(); $i++){
    echo '<pre>';
    print_r($row);
    echo '</pre>';
///////////////test///////////////
include 'counter.php';
if(count($row) -1 > $counter){

	$counter++;
}else{

	$counter = 0;
}
$chawera = mysql_query('UPDATE count SET counter = '.$counter.' ');

// randomly include a file
echo $row[$counter]['site'] . '.php';
/////////////test////////////////
}
?>













