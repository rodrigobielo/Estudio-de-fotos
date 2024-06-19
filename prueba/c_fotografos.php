<?php
include 'conexion.php'; // Archivo de conexión a la base de datos
include 'FotografoModel.php'; // Modelo para manejar la lógica de inserción


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fotografo = new stdClass();
    $fotografo->nombre = $_POST['nombre'];
    $fotografo->apellidos = $_POST['apellidos'];
    $fotografo->correoElectronico = $_POST['correoElectronico'];
    $fotografo->telefono = $_POST['telefono'];
    $fotografo->direccion = $_POST['direccion'];

    $model = new FotografoModel($connection); // Crear una instancia del modelo
    $result = $model->insertFotografo($fotografo); // Llamar al método para insertar el fotógrafo

    if ($result) {
        echo "Fotógrafo registrado exitosamente!";
    } else {
        echo "Error al registrar fotógrafo.";
    }


    
    
}
?>
