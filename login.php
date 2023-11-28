<!-- BEGIN: /C:/Users/user/Desktop/UdeA/semestre 8/Sistemas Operativos/phplogin -->
<?php

// Sample credentials
$usuarios_validos = array(
    'usuario1' => 'contrasena1',
    'usuario2' => 'contrasena2'
);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate username
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    if (empty($username)) {
        echo 'Please enter a username.';
        return;
    }

    // Sanitize and validate password
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if (empty($password)) {
        echo 'Please enter a password.';
        return;
    }

    // Validate credentials
    if (array_key_exists($username, $usuarios_validos) && $usuarios_validos[$username] === $password) {
        echo '¡Inicio de sesión exitoso!';
    } else {
        echo 'Error de inicio de sesión. Credenciales no válidas.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>


<!-- END: /C:/Users/user/Desktop/UdeA/semestre 8/Sistemas Operativos/phplogin -->

