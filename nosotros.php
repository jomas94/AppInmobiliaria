<?php include_once 'includes/templates/header.php'; ?>

    <main class="contenedor">
        <h1>Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 años de experiencia</blockquote>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, ex. Porro quisquam perferendis excepturi, quo, cumque reprehenderit, expedita cupiditate modi possimus nemo similique. Dolor natus tenetur nulla, illo veniam officia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium numquam natus inventore aliquam ipsa sit magni illum magnam cum, eligendi quidem molestias labore, laudantium dolores voluptas architecto consectetur distinctio. Ratione?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, ex. Porro quisquam perferendis excepturi, quo, cumque reprehenderit, expedita cupiditate modi possimus nemo similique. Dolor natus tenetur nulla, illo veniam officia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium numquam natus inventore aliquam ipsa sit magni illum magnam cum, eligendi quidem molestias labore, laudantium dolores voluptas architecto consectetur distinctio. Ratione?</p>
            </div>
        </div>
    </main>
    <section class="contenedor">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure voluptate rerum modi reprehenderit aliquid, omnis nulla cumque, ipsa quaerat fugit sed quia impedit, cum accusamus corporis. Sit qui itaque nostrum.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono seguridad" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure voluptate rerum modi reprehenderit aliquid, omnis nulla cumque, ipsa quaerat fugit sed quia impedit, cum accusamus corporis. Sit qui itaque nostrum.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono seguridad" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure voluptate rerum modi reprehenderit aliquid, omnis nulla cumque, ipsa quaerat fugit sed quia impedit, cum accusamus corporis. Sit qui itaque nostrum.</p>
            </div>
        </div>
    </section>
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