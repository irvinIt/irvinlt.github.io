<?php
if (isset($_GET['distance']) && isset($_GET['steps'])) {
    $distance = $_GET['distance'];
    $steps = $_GET['steps'];

    // Procesa los datos recibidos
    // Puedes almacenarlos en una base de datos, generar gráficos, etc.

    // Imprime los datos en tiempo real
    echo "Distancia recorrida: " . $distance . " metros<br>";
    echo "Pasos: " . $steps . "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Datos en tiempo real</title>
    <meta http-equiv="refresh" content="1">
</head>
<body>
    <h1>Datos en tiempo real</h1>
    <div id="data-container">
        <?php
        // Muestra los últimos datos recibidos
        if (isset($distance) && isset($steps)) {
            echo "Última distancia recorrida: " . $distance . " metros<br>";
            echo "Últimos pasos: " . $steps . "<br>";
        }
        ?>
    </div>
</body>
</html>

