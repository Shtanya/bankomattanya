<?php
echo "Снятие наличных"; 
try { 
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1") 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
CREATE TABLE Karta (
	Nomer karti varchar(30) NOT NULL,
	Password varchar(30) NOT NULL,
	Srok karti varchar(30) NOT NULL,
	Balans varchar(30) NOT NULL,
	id int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id)
);

CREATE TABLE Operacii (
	Data DATETIME NOT NULL,
	Vremya DATETIME NOT NULL,
 Summa varchar NOT NULL,
	id int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id)
);
$conn->query($sql); 
} 
catch (PDOException $e) { 
print("Error connecting to SQL Server."); 
die(print_r($e)); 
}  
echo"Снятие наличных";
?>
