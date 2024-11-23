<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./css/estilosRegistro.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>
    <section id="registro">
        <h1>Bienvenido</h1>
        <p>Inicia sesión o regístrate para acceder.</p>
        <div class="form-container">

            <div class="form-box">
                <h2>Iniciar Sesión</h2>
                <form action=./php./login.php method="POST">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
                    
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="passwordlog" placeholder="Ingresa tu contraseña" required>
                    
                    <button name="ingresar" type="submit">Iniciar Sesión</button>
                </form>
                <a href="./Pagina Principal.php" class="btn-inicio">Volver al Inicio</a>
            </div>

            <div class="form-box">
                <h2>Registro</h2>
                <form action="./php/registro_usuarios_be.php" method="POST">
                    <label for="nombres">Nombres</label>
                    <input type="text" id="nombres" name="nombres" placeholder="Ingresa tus nombres" required>
                    
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos" required>
                    
                    <label for="correo">Correo</label>
                    <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo" required>
                    
                    <label for="genero">Género</label>
                    <select id="genero" name="genero" required>
                        <option value="">Selecciona</option>
                        <option value="femenino">Femenino</option>
                        <option value="masculino">Masculino</option>
                    </select>
                    
                    <label for="nueva-password">Contraseña</label>
                    <input type="password" id="nueva-password" name="password" placeholder="Crea una contraseña" required>
                    
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>