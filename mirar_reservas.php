<?php
include 'db.php';

// Preparar la consulta SQL
$query = "SELECT * FROM Reservas";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<h2>Listado de Reservas</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID Reserva</th><th>RUT Huesped</th><th>ID Habitación</th><th>Check-In</th><th>Check-Out</th><th>Estado</th></tr>";
    // Salida de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id_reserva"]."</td>
                <td>".$row["rut_huesped"]."</td>
                <td>".$row["id_habitacion"]."</td>
                <td>".$row["fecha_checkin"]."</td>
                <td>".$row["fecha_checkout"]."</td>
                <td>".$row["estado"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
