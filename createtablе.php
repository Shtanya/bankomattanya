<?php
echo "Снятие наличных"; 
try { 
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 
$sql = "CREATE TABLE Karta (
id INT NOT NULL IDENTITY(1,1)
PRIMARY KEY (id),
Nomer karti varchar(30),
Password varchar(30),
Srok karti varchar(30),
Balans varchar(30))"; 
$conn->query($sql);
)";

$sql = "CREATE TABLE Operacii (
id INT NOT NULL IDENTITY(1,1)
PRIMARY KEY (id),
Data DATETIME(30),
Vremya DATETIME(30),
Summa varchar(100))";
$conn->query($sql); 
)"; 
} 
catch (PDOException $e) { 
print("Error connecting to SQL Server."); 
die(print_r($e)); 
}  
echo"Снятие наличных";
?>
