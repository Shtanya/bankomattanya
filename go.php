<META http-equiv=content-type content="text/html; charset=UTF-8">
<?php
include("random.php");
$cap = $_COOKIE["captcha"];
function check_code($code, $cookie) 
{
$code = trim($code); 
	$code = md5($code);
if ($code == $cap){return TRUE;}else{return FALSE;}
if (isset($_POST['go']))
{
if ($_POST['code'] == '')
			{
				exit("Ошибка: введите капчу!"); //...то возвращаем ошибку
			}
		// Если код введен правильно (функция вернула TRUE), то...
			if (check_code($_POST['code'], $cookie))
			{
				echo "Ты правильно ввел капчу. Возьми с полки тортик, он твой."; // Поздравляем с этим пользователя
			}
		// Если код введен неверно...
			else 
			{
				exit("Ошибка: капча введена неверно!"); //...то возвращаем ошибку
			}
		}
	// Если к нам обращаются напрямую, то дело дрянь...
	else 
	{
		exit("Access denied"); //..., возвращаем ошибку
	}
	
?>
