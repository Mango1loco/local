<!DOCTYPE html>
<html>
<form action="index.php" method="get">
	<br>
	<input type="text" name="nombre">
	<br>
	<br>
     <input type="date" name="hora">
<input type="submit">
</form>
<?php  
$nombre = $_GET['nombre'];
$hora = $_GET['hora'];
echo "Tu Nombre Es:" . $nombre . "<br/>";
echo "La Hora Que Eligistes Es:" . $hora . "<br/>";

?>
</html>