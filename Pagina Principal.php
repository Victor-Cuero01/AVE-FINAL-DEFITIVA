<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.V.E</title>
    <link rel="stylesheet" href="./css/estilosPrincipal.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="nav"> 
            <div class="logo">A.V.E</div>
            <ul class="menu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre">Sobre Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#comentarios">Comentarios</a></li>
                <li><a href="./Registro.php">Iniciar Sesión</a></li>
            </ul>
        </nav>  
        <main class="snap-container">
            <section id="inicio">
                <h1>Bienvenido/a</h1>
                <p>Red de apoyo juvenil, explora nuestros servicios y aprende con nosotros.</p>
            </section>

            <section id="sobre">
                <h1>Sobre nosotros</h1>
                <p>Este proyecto nace con la iniciativa de promover un desarrollo integral en jóvenes, y otorgar herramientas para mejorar el desempeño laboral</p>
            </section>      

            <section id="servicios">
                <h1>¿Qué ofrecemos?</h1>
                <p>Descubre nuestras oportunidades para tu bienestar y crecimiento personal.</p>
                <div class="services-container">

                    <div class="service">
                        <img src="./images/psiquico.svg" alt="Psíquico">
                        <h2>Psíquico</h2>
                        <p>Exploración y guía para tu mente y emociones.</p>
                    </div>

                    <div class="service">
                        <img src="./images/espiritual.svg" alt="Espiritual">
                        <h2>Espiritual</h2>
                        <p>Conexión con tu ser interior y equilibrio espiritual.</p>
                    </div>

                    <div class="service">
                        <img src="./images/fisico.svg" alt="Físico">
                        <h2>Físico</h2>
                        <p>Cuidado y fortalecimiento de tu cuerpo.</p>
                    </div>

                    <div class="service">
                        <img src="./images/tecnico.svg" alt="Técnico">
                        <h2>Técnico</h2>
                        <p>Adquisión de habilidades practicas.</p>
                    </div>
                </div>
            </section>

            <section id="comentarios">
                <h1>Comentarios</h1>
                <p>¡Nos encantaría conocer tu opinión sobre nuestros cursos y servicios!</p>
                <form action="./php/registro_comentario_be.php" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="comentario">Comentario:</label>
                    <textarea id="comentario" name="comentario" rows="4" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </section>
        </main>

</body>
</html>