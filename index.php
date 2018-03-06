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
<h1>Система банкомата</h1>
<p>Введите Пин-код,далее пройдет авторизация,выбрать операцию,снять наличные,затем нажать<strong>Забрать карту</strong> </p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
     Пин-код  <input type="text" 
name="Пин-код" id="Пин-код"/></br>
     Авторизация <input type="text" 
name="Авторизация" id="Авторизация"/></br>
    Выбор операции(снять наличные)  <input type="text" 
name="Выбор операции(снять наличные)" id="Выбор операции(снять наличные)"/></br>
Ввод суммы <input type="text" 
name="Ввод суммы " id="Ввод суммы "/></br>
Подтверждение суммы <input type="text" 
name="Подтверждение суммы" id="Подтверждение суммы"/></br>
<input type="submit" 
name="Забрать карту" value="Забрать карту" />
Выдача наличных и чека <input type="text" 
name="Выдача наличных и чека " id="Выдача наличных и чека "/></br>
</form>
<?php


?>
</body>
</html>

