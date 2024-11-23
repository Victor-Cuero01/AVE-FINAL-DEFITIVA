<?php
// Incluimos el archivo de conexión a la base de datos
include('conexion_be.php');

// Verificamos si se envió el formulario
if (isset($_POST['ingresar'])) {
    // Obtenemos los datos ingresados por el usuario
    $correo = mysqli_real_escape_string($conexion, $_POST['usuario']); // Campo del correo
    $password = mysqli_real_escape_string($conexion, $_POST['passwordlog']); // Campo de la contraseña

    // Consulta SQL para verificar las credenciales
    $query = "SELECT * FROM afiliados WHERE correo = '$correo' AND contrasena = '$password'";
    $resultado = mysqli_query($conexion, $query);

    // Verificamos si el usuario existe
    if (mysqli_num_rows($resultado) > 0) {
        // Usuario válido
        echo "<script>
                window.location.href = '../Pagina Logged in.php';
              </script>";
    } else {
        // Credenciales incorrectas
        echo "<script>
                alert('Correo o contraseña incorrectos');
                window.location.href = '../Registro.php'; // Redirige al registro o login nuevamente
              </script>";
    }
} else {
    // Si no se envió el formulario, redirige a la página de inicio
    echo "<script>
            alert('Acceso no autorizado');
            window.location.href = '../Registro.php';
          </script>";
}

// Cerramos la conexión
mysqli_close($conexion);
?>
