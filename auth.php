<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link rel="stylesheet" href="styles.css"> <!-- Estilos añadidos -->
</head>
<body>
    <header>
        <h1>Autenticación</h1>
    </header>
    <div class="container">
        <form action="authenticate.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
    <footer>
        <p>Todos los derechos reservados &copy; 2024</p>
    </footer>
    <script src="scripts.js"></script> <!-- Scripts añadidos -->
</body>
</html>
