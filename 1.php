<html>
<head>
<Title>Registration Form</Title>
<style type="text/css">
    body { background-color:
 #fff; border-top: solid 10px #000;
 color: #333; font-size: .85em;
 margin: 20; padding: 20;
 font-family: "Segoe UI",
 Verdana, Helvetica, Sans-Serif;
    }
    h1, h2, h3,{ color: #000; 
margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em;
 text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em; 
border: 0 none; }
</style>
</head>
<body>
<h1>Выбор операции "Выдача наличных"</h1>
<p>В меню вы увидите числа (100, 500, 1000, 5000)Вам подходит одна из этих сумм? Нажимаете на кнопку напротив нее. Не подходит? Выбираете пункт «Другая сумма», вводите желаемую сумму (кратную определенному числу, что обязательно будет указано). К примеру, банкомат может выдавать только купюры, кратные 100. </p>
<form method="post" action="1.php" 
enctype="multipart/form-data" >
<select name="vibor summi">
<option value="100">100
<option value="500">500
<option value="1000">1000
<option value="5000">5000
</select>
   <input type="submit" 
name="Подтвердить" value="Подтвердить" />
 Другая сумма <input type="text" 
name="Другая сумма" id="Другая сумма"/></br>
<input type="submit" 
name="Выдать" value="Выдать" />
  </form>
<?php


?>
</body>
</html>

