<?php 
echo "123456"; 
try { 
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1") 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "CREATE TABLE Karta ( 
Nomer karti varchar(30) NOT NULL AUTO_INCREMENT, 
Pin-kod varchar(30) NOT NULL AUTO_INCREMENT, 
Srok karti varchar(30) NOT NULL AUTO_INCREMENT, 
Balans varchar(30) NOT NULL AUTO_INCREMENT, 
Familiya varchar(30) NOT NULL AUTO_INCREMENT, 
Imya varchar(30) NOT NULL AUTO_INCREMENT, 
PRIMARY KEY (Nomer karti)
) ";
$sql="CREATE TABLE Operacii ( 
Data DATE(30) NOT NULL, 
Vremya DATETIME(30) NOT NULL, 
Symma varchar(30) NOT NULL, 
Nomer karti varchar(30) NOT NULL AUTO_INCREMENT, 
PRIMARY KEY (Nomer karti) 
)"; 
mysql_query($sql) or die(mysql_error());
mysql_close();
print '<p>Data Base created!</p>';
