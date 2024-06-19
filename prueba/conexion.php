<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "estudio"; // Nombre de la base de datos

// Crear la conexión
$connection = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>