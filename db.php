<?php
$host = 'localhost';
$username = 'root';
$password = '';  // El password por defecto de XAMPP para 'root' es vacío
$dbname = 'datos_hotel';

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
