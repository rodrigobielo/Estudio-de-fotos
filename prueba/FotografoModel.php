<?php
class FotografoModel {
    private $connection;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Método para insertar un fotógrafo en la base de datos
    public function insertFotografo($fotografo) {
        $nombre = $fotografo->nombre;
        $apellidos = $fotografo->apellidos;
        $correoElectronico = $fotografo->correoElectronico;
        $telefono = $fotografo->telefono;
        $direccion = $fotografo->direccion;

        $sql = "INSERT INTO fotografo (nombre, apellidos, correoElectronico, telefono, direccion) VALUES ('$nombre', '$apellidos', '$correoElectronico', '$telefono', '$direccion')";

        if ($this->connection->query($sql) === TRUE) {
            return true; // Si la inserción fue exitosa
        } else {
            return false; // Si hubo un error en la inserción
        }
    }
}
?>
