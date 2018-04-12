<?php
try {
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = shtt", "tanya", "L4x78tm2p1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE Karta(
id INT NOT NULL IDENTITY(1,1)
PRIMARY KEY(id),
Nomerkarti varchar(30),
Password varchar(30),
Srokkarti INT)";
$conn->query($sql);  
echo "<h3>Таблица создана!</h3>";
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
?>
echo "<h3>Таблица создана!</h3>";
