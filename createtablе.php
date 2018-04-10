<?php  
try { 
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1") 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "CREATE TABLE Karta (
id int(11) NOT NULL auto_increment,
Nomer karti varchar(30) NOT NULL AUTO_INCREMENT, 
Password varchar(30) NOT NULL AUTO_INCREMENT, 
Srok karti varchar(30) NOT NULL AUTO_INCREMENT, 
Balans varchar(30) NOT NULL AUTO_INCREMENT, 
Familiya varchar(30) NOT NULL AUTO_INCREMENT, 
Imya varchar(30) NOT NULL AUTO_INCREMENT, 
PRIMARY KEY (id)
) ";
 $sql="CREATE TABLE Operacii (
id int(11) NOT NULL auto_increment,
Data DATE(30) NOT NULL,
Vremya DATETIME(30) NOT NULL,
Symma varchar(30) NOT NULL,
Nomer karti varchar(30) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id)
)";
$conn->query($sql); 
} 
catch (PDOException $e) { 
print("Error connecting to SQL Server."); 
die(print_r($e)); 
}  
?>
