<html>
<head>
<Title>Система банкомата</Title>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>
</head>
<body>
<h1>Выберите сумму для снятия</h1>
<p>В меню вы увидите числа (100, 500, 1000, 5000)Вам подходит одна из этих сумм? Нажимаете на кнопку напротив нее. Не подходит? Выбираете пункт «Другая сумма», вводите желаемую сумму (кратную определенному числу, что обязательно будет указано). К примеру, банкомат может выдавать только купюры, кратные 100. </p>
<form method="post" action="2.php" 
enctype="multipart/form-data" >
<select name="vibor summi">
<option value="100">100
<option value="500">500
<option value="1000">1000
<option value="5000">5000
</select>
Другая сумма <input type="text" 
name="Другая сумма" id="Summa"/></br> 
 <form>
<input type="button" value="Выдать" onClick='location.href="3.php"'>
</form>
</form>
<?php

?>
</body>
</html>


