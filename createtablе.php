<?php
$host = "stanya.database.windows.net";
$user = "Tanya";
$pwd = "Nastyal4x78tm2p1";
$db = "tanya";
try{
    $conn = new PDO( "sqlsrv:Server=  stanya.database.windows.net ; Database = tanya ", Tanya, Nastyal4x78tm2p1);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE Karta (
    Nomer karti varchar(30) NOT NULL AUTO_INCREMENT, 
    Pin-kod varchar(30) NOT NULL AUTO_INCREMENT, 
    Srok karti varchar(30) NOT NULL AUTO_INCREMENT, 
    Balans varchar(30) NOT NULL AUTO_INCREMENT, 
    Familiya varchar(30) NOT NULL AUTO_INCREMENT, 
    Imya varchar(30) NOT NULL AUTO_INCREMENT, 
    PRIMARY KEY (Nomer karti) 
); 
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>

