<?php include_once 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propriedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">3.000.000€</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono aparcamiento">
                    <p>3</p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones  ">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, voluptatem voluptas optio saepe vero unde est expedita animi in libero sit quos laboriosam ullam vitae beatae nobis recusandae illo doloremque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor dolorum sit ratione itaque unde voluptate nemo labore accusamus assumenda, quo eveniet repudiandae dicta facilis deserunt suscipit molestiae corrupti odio?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, voluptatem voluptas optio saepe vero unde est expedita animi in libero sit quos laboriosam ullam vitae beatae nobis recusandae illo doloremque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor dolorum sit ratione itaque unde voluptate nemo labore accusamus assumenda, quo eveniet repudiandae dicta facilis deserunt suscipit molestiae corrupti odio?</p>
        </div>

    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>

            </nav>
        </div>
        <p class="copyright">Todos los derechos reservaods 2021 &copy;</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
</body>
</html>