<html>
<head>
</html>
<Title>Registration Form</Title>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>    
</head>
<body>  
</html> 
<h1>Система банкомата</h1> 
Номер карты <input type="text" 
name="Номер карты" id="Номер карты"/></br> 
Срок действия карты <input type="text" 
name="Срок действия карты" id="Срок действия карты"/></br>
<FONT color="red">Когда карта просрочена,она блокируется,и денежные средства с нее получить нельзя.</FONT> 
<p>Введите пароль,после набора нажмите  на <strong>Продолжить</strong> </p>
<p>Для отказа от операции нажмите  <strong>Отмена</strong> </p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
 <p>
  <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<form>
<input type="button" value="Продолжить" onClick='location.href="1.php"'>
</form>
<form method="POST"> 
<input type="submit" name="nazvanie_knopki" value="Отмена" /> 
<?php
	try {
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1")
}
catch (PDOException $e) {
print("Error connecting to SQL Server.");
die(print_r($e));
}
try {  
$stock1 = $_POST['stock1'];
$stock2 = $_POST['stock2'];
$stock3 = $_POST['stock3'];
$totalstock = 0;
$buy1 = $_POST['buy1'];
$totalstock = $stock1 + $stock2 + $stock3
if( isset( $_POST['buy1'] ) )
    {
if(!empty($_POST)) {
try {
$sql_insert =
"INSERT INTO Karta (nomer karti, password, srok karti)
VALUES (?,?,?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bindValue(1, $nomer karti);
$stmt->bindValue(2, $password);
$stmt->bindValue(3, $srok karti);
$stmt->execute();
}
$sql_select = "SELECT * FROM Karti";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll();
echo "<table>";
echo "<tr><th>nomer karti</th>";
echo "<th>password</th>";
echo "<th>srok karti</th>";
foreach($registrants as $registrant) {
echo "<tr><td>".$registrant['nomer karti']."</td>";
echo "<td>".$registrant['password']."</td>";
echo "<td>".$registrant['srok karti']."</td>";
}
echo "</table>";
}
?>
</body>
</html> 


