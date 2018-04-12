<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"> 
<Title>Система банкомата</Title>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>    
</head>
<body>  
<h1>Система банкомата</h1>
<form method="post"action="index.php">
Номер карты <input type="text" 
name="Nomerkarti" id="Nomerkarti"/></br> 
Срок действия карты<input type="text" 
name="srokkarti" id="srokkarti"/></br>
<FONT color="red">Когда карта просрочена,она блокируется,и денежные средства с нее получить нельзя.</FONT> 
<p>Введите пароль,после набора нажмите  на <strong>Продолжить</strong> </p>
<p>Для отказа от операции нажмите  <strong>Отмена</strong> </p>
 <p>
  <label>Ваш пароль:<br></label>
    <input name="password"type="password"size="15"maxlength="15">
    </p>
<form>
<input type="button" value="Продолжить" onClick='location.href="1.php"'>
</form>
<!--задний фон-->
<div onclick="show('none')" id="wrap"></div>
<!-- Всплывающее окно-->
<div id="window">
<!-- Крестик-->
<span class="close" onclick="show('none')">X</span>
<img class="aligncenter size-full wp-image-7815" src="http://bloggood.ru/wp-content/uploads/2014/09/CoverCommander.jpg" alt="Бесплатная книга от автора блога «5 тезисов, которые помогут достичь любых целей!»" width="270" height="370">
<br><a href="http://bloggood.ru/biblioteka/besplatnaya-kniga-ot-avtora-bloga-5-tezisov-kotorye-pomogut-dostich-lyubyx-celej.html/">Читать далее...</a>
</div>
 
<!--Кнопка-->
<button onclick="show('block')">Показать окно</button>
<script type="text/javascript">
//Функция показа
function show(state)
{
document.getElementById('window').style.display = state;
document.getElementById('wrap').style.display = state;
}
</script>
</body>
</html> 
<?php
try {
$conn = new PDO("sqlsrv:server = tcp:stanya.database.windows.net,1433; Database = shtt", "Tanya","Sobachka1");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
print("Error connecting to SQL Server.");
die(print_r($e));
}
$sql_select = "SELECT * FROM Karta";
$stmt = $conn->query($sql_select);
if(isset($_POST["submit"])) {
if ($stmt->fetchColumn() > 0) {
foreach ($n as $row) {
session_start();
$_SESSION['Nomerkarti'] = $row["Nomerkarti"];
$_SESSION['Srokkarti'] = $row["Srokkarti"];
$_SESSION['Password'] = $row["Password"]; 
}
}
}
?>
