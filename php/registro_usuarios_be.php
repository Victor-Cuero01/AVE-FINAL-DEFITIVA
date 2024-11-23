<?php
 
include 'conexion_be.php';

 $nombre = $_POST['nombre'];
 $comentario = $_POST['comentario'];


 $querycomments = "INSERT INTO comentarios(nombre, comentariouser) 
                            VALUES('$nombre', '$comentario')"; 



$ejecutarcomments = mysqli_query($conexion, $querycomments);


if($ejecutarcomments){
    echo '
        <script>
            alert("Comentario almacenado correctamente")
            window.location = "../Pagina Principal.php"
        </script>
    ';
}

mysqli_close($conexion);
?>
