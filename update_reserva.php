<?php
include 'db.php';

// Recoger datos del formulario
$id_reserva = $_POST['id_reserva'];
$rut_huesped = $_POST['rut_huesped'];
$id_habitacion = $_POST['id_habitacion'];
$fecha_checkin = $_POST['fecha_checkin'];
$fecha_checkout = $_POST['fecha_checkout'];

// Preparar la consulta SQL
$query = "UPDATE Reservas SET rut_huesped = ?, id_habitacion = ?, fecha_checkin = ?, fecha_checkout = ? WHERE id_reserva = ?";

// Preparar sentencia
$stmt = $conn->prepare($query);
$stmt->bind_param("sisii", $rut_huesped, $id_habitacion, $fecha_checkin, $fecha_checkout, $id_reserva);

// Ejecutar y verificar
if ($stmt->execute()) {
    echo "Reserva actualizada correctamente.";
    echo "<br><a href='view_reservations.php'>Ver Reservas</a>";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
