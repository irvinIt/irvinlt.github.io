<?php
// Obtener los valores de distancia y pasos desde la solicitud GET
$distance = isset($_GET['distance']) ? $_GET['distance'] : 0.00;
$steps = isset($_GET['steps']) ? $_GET['steps'] : 0;

// Crear un arreglo asociativo con los valores de distancia y pasos
$data = array(
  'distance' => floatval($distance),
  'steps' => intval($steps)
);

// Convertir el arreglo a formato JSON y enviar la respuesta
header('Content-Type: application/json');
echo json_encode($data);
?>
