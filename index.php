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
Номер карты <input type="text" 
name="Номер карты" id="Номер карты"/></br> 
Срок действия карты <input type="text" 
name="srok karti" id="Срок действия ка"/></br>
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
<input type="submit" name="submit" value="Отмена"> 
</form>
<?php
 
?>
</body>
</html> 


