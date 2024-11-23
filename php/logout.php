<?php
session_start(); // Iniciamos la sesión
session_destroy(); // Destruimos la sesión
header('Location: ../registro.php'); // Redirigimos al login o registro
exit;
?>
