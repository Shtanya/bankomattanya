<html>
<head>
</html>
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
<p>Введите Пин-код,после набора нажмите  на <strong>Далее</strong> </p>
<p>Для отказа от операции нажмите  <strong>Отмена</strong> </p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
    Пин-код  <input type="text" 
name="Пин-код" id="Пин-код"/></br>
     <input type="submit" 
name="Далее" value="Далее" />
 <input type="submit" 
name="Отмена" value="Отмена" />   
</form>
<?php


?>
</body>
</html>

