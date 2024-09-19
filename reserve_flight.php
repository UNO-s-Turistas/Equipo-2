<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Vuelo</title>
    <link rel="stylesheet" href="styles.css"> <!-- Estilos añadidos -->
</head>
<body>
    <header>
        <h1>Reservar Vuelo</h1>
    </header>
    <div class="container">
        <form action="confirm_reservation.php" method="post">
            <label for="flight_id">ID de Vuelo:</label>
            <input type="text" id="flight_id" name="flight_id" required>
            <label for="passenger_name">Nombre del Pasajero:</label>
            <input type="text" id="passenger_name" name="passenger_name" required>
            <input type="submit" value="Reservar">
        </form>
    </div>
    <footer>
        <p>Todos los derechos reservados &copy; 2024</p>
    </footer>
    <script src="scripts.js"></script> <!-- Scripts añadidos -->
</body>
</html>
