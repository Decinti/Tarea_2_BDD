<?php
include 'db.php';

// Obtener id_reserva del parámetro GET
$id_reserva = $_GET['id_reserva'];

// Preparar la consulta SQL
$query = "DELETE FROM Reservas WHERE id_reserva = ?";

// Preparar sentencia
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id_reserva);

// Ejecutar y verificar
if ($stmt->execute()) {
    echo "Reserva eliminada correctamente.";
} else {
    echo "Error al eliminar: " . $conn->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
