<html>
<head>
<Title>Registration Form</Title>
<body style="color:Black; background-color:#66cc66"> 
<img src='http://novostroiki-irkutsk.ru/images/logo_sberbank.png'>
</head>
<body>
<h1>Желаете ли вы выполнить еще одну операцию?</h1>
<form method="post" action="4.php" 
enctype="multipart/form-data" >
<div class="header">  
<a href="\index.php"> На главную</a></li> 
</div>
<input type="submit" name="submit" value="Забрать карту"> 
</form>
<?php
if (isset($_POST['submit']))
{ 
echo "Пожалуйста,заберите карту!"; 
} 
?>
</body>
</html>

