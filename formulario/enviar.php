<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST['name'], $_POST['email'],$_POST['asunto'] , $_POST['mensaje'])) {
    
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $destinario = "direccion@complejoprincipedegales.cl";
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpo = "Nombre: $nombre\nAsunto: $asunto \nCorreo: $correo\nMensaje:\n$mensaje";
    $headers = "From: $correo\r\n";

    mail($destinario, $asunto, $cuerpo, $headers);
    // Mostrar mensaje y redirigir con JavaScript
    echo '
    <html>
      <head>
        <meta charset="UTF-8">
        <title>Formulario enviado</title>
        <script>
          alert("¡Formulario enviado exitosamente!");
          window.location.href = "../index.html";
        </script>
      </head>
      <body>
        <noscript>
          <p>¡Formulario enviado exitosamente! Haz clic <a href="../index.html">aquí</a> para volver.</p>
        </noscript>
      </body>
    </html>
    ';
    exit;
} else {
    echo "Error: Faltan datos del formulario.";
}
?>