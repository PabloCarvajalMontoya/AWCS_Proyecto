<?php
    include 'config.php';


    // Obtener los parámetros del formulario con el metodo POST
    $nombre_libro = $_POST['nombre_libro'];
    $autor_libro = $_POST['autor_libro'];
    $descripcion_libro = $_POST['descripcion_libro'];
    $genero_libro = $_POST['genero_libro'];
    $anio_publicacion = $_POST['anio_publicacion'];
    $idioma_libro = $_POST['idioma_libro'];
    $editorial_libro = $_POST['editorial_libro'];
    $recomendacion = $_POST['recomendacion'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $email_usuario = $_POST['email_usuario'];

    // Configurar el correo electrónico
    $para = "josejb425@gmail.com";
    $asunto = "Nueva Sugerencia de Libro";
    $mensaje = "
    Se ha recibido una nueva sugerencia de libro:
    
    Nombre del libro: $nombre_libro
    Autor del libro: $autor_libro
    Descripción: $descripcion_libro
    Género literario: $genero_libro
    Año de publicación: $anio_publicacion
    Idioma: $idioma_libro
    Editorial: $editorial_libro
    Recomendación: $recomendacion
    Nombre del usuario: $nombre_usuario
    Correo del usuario: $email_usuario
"; 

   // // Enviar el correo electrónico
   $headers = "From: josejb425@gmail.com\r\n";
   $headers .= "Reply-To: josejb425@gmail.com\r\n";
   $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "Sugerencia enviada y guardada con éxito.";
    } else {
        echo "Error al enviar la sugerencia.";
    }
    // Redirigir a la página de agradecimiento
    header('Location: agradecimiento.html');
    exit();
?>
    

    

 