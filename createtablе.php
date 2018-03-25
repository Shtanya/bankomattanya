<?php
$host = "stanya.database.windows.net";
$user = "Tanya";
$pwd = "Nastyal4x78tm2p1";
$db = "tanya";
try{
    $conn = new PDO( "sqlsrv:Server=  stanya.database.windows.net ; Database = tanya ", Tanya, Nastyal4x78tm2p1);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE bankomat_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>

