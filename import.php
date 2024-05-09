<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importación</title>
</head>
<body>
<h1>Importación de Lamparas</h1>
<?php
require_once("clases/Lighting.php");

$lighting = new Lighting();
$tasks = $lighting->getAllLamps();
echo "<p>Lamparas importadas con éxito!</p>";
?>



</body>
</html>
