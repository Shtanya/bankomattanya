<html>
<head>
<Title>Система банкомата</Title>
</head>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>
<h1>Выберите операцию которую хотите выполнить</h1>  
<select name="Выбор операции">
<option value="Запросить баланс">Запросить баланс
<option value="Получить наличные">Получить наличные
</select>
<form method="post" action="1.php" 
enctype="multipart/form-data" >
</form>
<input type="button" value="Далее" onClick='location.href="2.php"'>
</form>
<button onclick="alert('Ваш баланс:6500 РУБ.');">На экране</button>
<?php
if (isset($_POST['submit']))
{ 
echo "На вашем счете:100000 РУБ!"; 
} 
?>
</body>
</html>

