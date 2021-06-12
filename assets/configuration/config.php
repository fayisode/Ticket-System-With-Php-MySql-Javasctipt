<?php

ob_start();

date_default_timezone_set("Africa/Lagos");

try{
    $connection = new PDO("mysql:dbname=ticket;host=localhost", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}


?>