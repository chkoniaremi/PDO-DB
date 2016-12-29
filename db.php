<?php 
//connect
try{
    $handler = new PDO('mysql:host=localhost;dbname=thehacka_test','thehacka','1vISl7ma08');
    $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $handler->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){
    echo 'ERROR cant connect Db' . $e->getMessage();
}








