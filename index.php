<?php 

$inicio = true;

include_once 'includes/templates/header.php';
 ?>


    <main class="contenedor">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Ventas</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el Lago</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propriedad</a>
                </div><!-- .contenido anuncio-->
            </div><!-- .anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Lorem ipsum dolor sit amet rs consectetur adipisicing elit.</p>
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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propriedad</a>
                </div><!-- .contenido anuncio-->
            </div><!-- .anuncio-->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/webp">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propriedad</a>
                </div><!-- .contenido anuncio-->
            </div><!-- .anuncio-->
        </div> <!--  contenedor-anuncios-->
        <div class="ver-todas alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>
    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>LLena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/blog1.webp" type="image/webp">
                        <source src="build/img/blog1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de la casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span> Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/blog2.webp" type="image/webp">
                        <source src="build/img/blog2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span> Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="reviews">
            <h3>Reviews</h3>
            <div class="review">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>-Jomario Andrade</p>

            </div>
        </section>
    </div>

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