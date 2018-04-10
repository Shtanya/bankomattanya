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
Пин-код  <input type="text" 
name="Пин-код" id="Пин-код"/></br>
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
 session_start();
 if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} } 
  if or empty($password))
   { 
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!"); 
} 
$password = stripslashes($password); 
$password = htmlspecialchars($password); 
$password = trim($password); 
 include ("creatable.php") 
 $result = mysql_query("SELECT * FROM users WHERE 
 $myrow = mysql_fetch_array($result); 
if (empty($myrow['password'])) 
{ 
exit ("Извините, введённый вами login или пароль неверный."); 
} 
else { 
if ($myrow['password']==$password) { 
$_SESSION['login']=$myrow['login']; 
$_SESSION['id']=$myrow['id'];
echo "Вы успешно вошли на сайт! <a href='index1.html'>Главная страница</a>"; 
} 
else { 
//если пароли не сошлись 

exit ("Извините, введённый вами login или пароль неверный."); 
} 
} 
?> 
</body>
</html>

