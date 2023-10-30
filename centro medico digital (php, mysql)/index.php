<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clinica asi toda bien de doc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu.png" class="menu-icon" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>medical center</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, illum tenetur! Vitae ab reprehenderit
                    optio quod recusandae repellendus, at ipsa nostrum earum ut consequatur modi ipsum aspernatur,
                    labore sed. Voluptatem?</p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="img/left.png" alt="img left">
            </div>
        </div>
    </header>
    <section class="about container">
        <div class="about-img">
            <img src="img/about.png" alt="about">
        </div>
        <div class="about-txt">
            <h2>nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum culpa, eligendi eos tempore ratione
                aliquid natus vitae, possimus molestiae qui iste, facilis reiciendis facere magnam itaque repellendus
                corporis deserunt? Tenetur?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt repellat, deleniti nam commodi tempora
                atque eius quos, ullam corrupti est, molestias doloribus aperiam consequuntur facilis ipsum odio rerum
                perspiciatis similique!</p>
        </div>
    </section>
    <main class="servicios">
        <h2>servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatria</h3>
            </div>
            <div class="servicio-2">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>ginecologia</h3>
            </div>
            <div class="servicio-3">
                <i class="fa-sharp fa-solid fa-bed-pulse"></i>
                <h3>dermatologia</h3>
            </div>
            <div class="servicio-4">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>
        </div>
    </main>
    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>agenda consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="nombre y apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="numero de telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="deatalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onClick="myFunction()">

            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="links">
                <a href="#" class="logo">logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>

                </ul>
            </div>
        </div>
    </footer>

    <?php 
        include("send.php")
    ?>
    <script>
        function myFunction() {
            window.location.href = "http://localhost/centro%20medico%20digital%20(php,%20mysql)/"
        }
    </script>
</body>

</html>