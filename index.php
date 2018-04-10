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
if( isset( $_POST['nazvanie_knopki'] ) ) 
{ 
echo 'Вы отменили операцию!'; 
} 
?>
<?php 
try { 
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = tanya", "Tanya", "Nastyal4x78tm2p1")
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	} 
	$sql_insert = 
	"INSERT INTO Karta (nomer karti, password, srok karti, balans, familiya, imya) 
	VALUES (?,?,?,?,?,?)"; 
	$stmt = $conn->prepare($sql_insert); 
	$stmt->bindValue(1, $nomer karti); 
	$stmt->bindValue(2, $password); 
	$stmt->bindValue(3, $srok karti);
	$stmt->bindValue(4, $balans);
	$stmt->bindValue(5, $familiya);
	$stmt->bindValue(6, $imya);
	$stmt->execute();
	 
		
	catch(Exception $e) { 
	die(var_dump($e)); 
	} 
	echo "<h3>Your're registered!</h3>"; 
	}
	$sql_select = "SELECT * FROM Karti"; 
$stmt = $conn->query($sql_select); 
$registrants = $stmt->fetchAll(); 
if(count($registrants) > 0) { 
echo "<h2>People who are registered:</h2>"; 
echo "<table>"; 
echo "<tr><th>nomer karti</th>"; 
echo "<th>password</th>"; 
echo "<th>srok karti</th>";
echo "<th>balans</th>";
echo "<th>familiya</th>";
echo "<th>imya</th></tr>";
foreach($registrants as $registrant) { 
echo "<tr><td>".$registrant['tireqty']."</td>"; 
echo "<td>".$registrant['oilqty']."</td>";
echo "<td>".$registrant['sparkqty']."</td>";
echo 'Ваш заказ: '. "$totalqty</br>";
echo 'Общая сумма заказа: '. "$x</br>";
echo "<td>".$registrant['adress']."</td>";
echo "<td>".$registrant['name']."</td>";
echo "<td>".$registrant['phone']."</td></tr>";
} 
echo "</table>"; 
} else { 
echo "<h3>No one is currently registered.</h3>"; 
}
	?>
	</body>
</html> 


