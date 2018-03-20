<?php
$host = "stanya.database.windows.net,1433";
$user = "Tanya";
$pwd = "Nastyal4x78tm2p1";
$db = "tanya";
try{
    $conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
    id INT NOT NULL IDENTITY(1,1)
    CREATE TABLE Karty
    PRIMARY KEY(id),
    "nomer karty" VARCHAR(30),
    "pin-kod" VARCHAR(30),
    "srok karty" VARCHAR(30),
    "balans" VARCHAR(30),
    "f.i.o." VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>
