
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
</head>
<body>
<h2 align="center">Ввод имени</h2>
<form action="display.php" method="POST">
<p align="center">Введите имя: <input type="text" name="firstname" /></p>
<p align="center">Введите фамилию: <input type="text" name="lastname" /></p>
<p align="center"><input  type="submit"  value="Отправить"></p>

</form>
</body>
</html>


<!--
<form method="get" action="index.php">
<input type="text" value="" name="name">
<input  type="submit" name="but" value="Жми">
</form>
<?php 
if ( isset($_GET['but']) )
{
	$data=$_GET;
$pic='ПРиВет '.$data['name'].'<br><img src="bg.jpg" alt="">';
echo $pic;
 echo "string";
}

?>-->