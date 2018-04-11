<html>
<head>
<Title>Система банкомата</Title>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>
</head>
<body>
<h1>Нужен ли вам чек?</h1>
<form method="post" action="3.php" 
enctype="multipart/form-data" >
<form>  
<input type="button" value="Да" onClick='location.href="4.php"'>
</form>
<form method="POST">  
<input type="submit" name="submit" value="Нет"> 
<?php
if (isset($_POST['submit']))
{ 
echo "Пожалуйста,заберите карту,и деньги!"; 
}   
?>
</body>
</html>
