<?php
require_once 'm_listaFotografos';

// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estudio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear una instancia del modelo FotografoModel
$fotografoModel = new FotografoModel($conn);

// Obtener el término de búsqueda (si se proporciona)
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Obtener todos los fotógrafos de la base de datos
$fotografos = $fotografoModel->getAllFotografos($searchTerm);

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($fotografos);

$conn->close();
?>
