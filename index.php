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
<p>Введите Пин-код,после набора нажмите  на <strong>Далее</strong> </p>
<p>Для отказа от операции нажмите  <strong>Отмена</strong> </p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
 <p>
  <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<form>
<input type="button" value="Далее" onClick='location.href="1.php"'>
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
 
?> 
</body>
</html>

