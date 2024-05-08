<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Añadir Reserva</title>
</head>
<body>
    <h2>Añadir Reserva</h2>
    <form action="insert_reservation.php" method="post">
        <label for="rut_huesped">RUT Huesped:</label><br>
        <input type="text" id="rut_huesped" name="rut_huesped" required><br><br>

        <label for="id_habitacion">ID Habitación:</label><br>
        <input type="number" id="id_habitacion" name="id_habitacion" required><br><br>

        <label for="fecha_checkin">Fecha Check-In:</label><br>
        <input type="date" id="fecha_checkin" name="fecha_checkin" required><br><br>

        <label for="fecha_checkout">Fecha Check-Out:</label><br>
        <input type="date" id="fecha_checkout" name="fecha_checkout" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
