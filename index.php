<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Integradora page</title>
</head>

<body>
    <header class="header">
        <div class="header-menu container">
            <div class="logo">
                <img src="logo.jpeg" alt="logo">
            </div>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img class="menu-icon" src="menu.png" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#Inicio-1">Inicio</li></a>
                    <li><a href="#Nosotros-1">Nosotros</li></a>
                    <li><a href="#Servicios-1">Servicios</li></a>
                    <li><a href="#Contacto-1">Contacto</li></a>
                </ul>
            </nav>
        </div>
        <div class="header-content container" id="Inicio-1">
            <div class="header-txt">
                <h1>Educación inclusiva</h1>
                <p>La inclusión educativa es brindar una formación equitativa a todos los estudiantes, incluidos aquellos con discapacidades, mediante ajustes tanto académicos como físicos para garantizar igualdad de oportunidades.</p>
                <a class="btn-1" href="#">Informacion</a>
            </div>
            <div class="header-img">
                <img src="1.png" alt="about">
            </div>
        </div>
    </header>

    <section class="about container" id="Nosotros-1">
        <div class="about-img">
            <img src="2.jpg" alt="asdsadasd">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Somos un equipo dedicado a facilitar el acceso a la educación. La Universidad Tecnológica Santa Catarina se fundó en 1998 con la misión de ofrecer programas de Técnico Superior Universitario (TSU) adaptados a las demandas de las industrias locales. Con el tiempo, hemos ampliado nuestra oferta educativa a programas de Ingeniería y hemos sido pioneros en la implementación de un Modelo de Inclusión Educativa y Laboral para Personas con Discapacidad en América.</p><br>
            <p>Me complace liderar esta comunidad universitaria y dar la bienvenida a todos. Estamos comprometidos a apoyarlos en su formación profesional y en su inserción en el mercado laboral. Les deseamos mucho éxito en su trayectoria académica y profesional.</p>
        </div>
    </section>

    <main class="services" id="Servicios-1">
        <h2>Servicios</h2>
        <div class="services-content container">
            <div class="service-1">
                <i class="fa-sharp fa-solid fa-book"></i>
                <a target="_blank" href="mediateca-1.html"><h3>Mediateca</h3></a>
            </div>
            <div class="service-1">
                <i class="fa-sharp fa-solid fa-school"></i>
                <a target="_blank" href="http://www.utsc.edu.mx/quienesSomos/rectoria.html"><h3>Oferta educativa</h3></a>
            </div>
            <div class="service-1">
                <i class="fa-solid fa-school-flag"></i>
                <a target="_blank" href="oferta.html"><h3>Oferta educativa traducido</h3></a>
            </div>
            <div class="service-1">
                <i class="fa-sharp fa-solid fa-bug"></i>
                <a target="_blank" href="https://www.vuala.com.mx/en-construccion.html"><h3>Bug reporter</h3></a>
            </div>
        </div>
    </main>

    <section class="formulario container" id="Contacto">
        <form method="post" autocomplete="off">
            <h2>Mas Informacion</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo electronico">
                    <i class="fa-solid fa-at"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a class="logo" href="#">Logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#Inicio-1">Inicio</li></a>
                    <li><a href="#Nosotros-1">Nosotros</li></a>
                    <li><a href="#Servicios-1">Servicios</li></a>
                    <li><a href="#Contacto-1">Contacto</li></a>
                </ul>
            </div>

        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/page-int"
        }
    </script>

</body>

</html>
