<?php
include 'db.php';

// Obtener id_reserva del parámetro GET
$id_reserva = $_GET['id_reserva'];

// Preparar y ejecutar la consulta
$query = "SELECT * FROM Reservas WHERE id_reserva = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id_reserva);
$stmt->execute();
$result = $stmt->get_result();
$reserva = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Reserva</title>
</head>
<body>
    <h2>Actualizar Reserva</h2>
    <form action="update_reservation.php" method="post">
        <input type="hidden" name="id_reserva" value="<?php echo $reserva['id_reserva']; ?>">

        <label for="rut_huesped">RUT Huesped:</label><br>
        <input type="text" id="rut_huesped" name="rut_huesped" value="<?php echo $reserva['rut_huesped']; ?>" required><br><br>

        <label for="id_habitacion">ID Habitación:</label><br>
        <input type="number" id="id_habitacion" name="id_habitacion" value="<?php echo $reserva['id_habitacion']; ?>" required><br><br>

        <label for="fecha_checkin">Fecha Check-In:</label><br>
        <input type="date" id="fecha_checkin" name="fecha_checkin" value="<?php echo $reserva['fecha_checkin']; ?>" required><br><br>

        <label for="fecha_checkout">Fecha Check-Out:</label><br>
        <input type="date" id="fecha_checkout" name="fecha_checkout" value="<?php echo $reserva['fecha_checkout']; ?>" required><br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
    