<html>
<head>
</html>
<Title>Registration Form</Title>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>    
</head>
<body>
<h1>Система банкомата</h1>
Срок действия карты <input type="text" 
name="Срок действия карты" id="Срок действия карты"/></br>
<FONT color="red">Когда карта просрочена,она блокируется,и денежные средства с нее получить нельзя.</FONT> 
<p>Введите Пин-код,после набора нажмите  на <strong>Далее</strong> </p>
<p>Для отказа от операции нажмите  <strong>Отмена</strong> </p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
    Пин-код  <input type="text" 
name="Пин-код" id="Пин-код"/></br>
     <input type="submit" 
name="Далее" value="Далее" />
 <input type="submit" 
name="Отмена" value="Отмена" />   
</form>
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
}
</body>
</html>

