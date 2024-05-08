<?php
include 'db.php';

// Recoger datos del formulario
$rut_huesped = $_POST['rut_huesped'];
$id_habitacion = $_POST['id_habitacion'];
$fecha_checkin = $_POST['fecha_checkin'];
$fecha_checkout = $_POST['fecha_checkout'];

// Preparar la consulta SQL
$query = "INSERT INTO Reservas (rut_huesped, id_habitacion, fecha_checkin, fecha_checkout, estado) VALUES (?, ?, ?, ?, 'activa')";

// Preparar sentencia
$stmt = $conn->prepare($query);
$stmt->bind_param("siss", $rut_huesped, $id_habitacion, $fecha_checkin, $fecha_checkout);

// Ejecutar y verificar
if ($stmt->execute()) {
    echo "Reserva añadida correctamente.";
    echo "<br><a href='add_reservation.php'>Añadir otra reserva</a>";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
