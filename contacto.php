<?php include_once 'includes/templates/header.php'; ?>

    <main class="contenedor">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre: </label>
                <input type="text" placeholder="Tu nombre" id="nombre">
                
                <label for="email">E-mail: </label>
                <input type="email" placeholder="Tu email" id="email">
                
                <label for="telefono">Teléfono: </label>
                <input type="tel" placeholder="Tu teléfono" id="telefono">
                
                <label for="mensaje">Mensaje: </label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información sobre Propriedad</legend>

                <label for="opciones">Vende o Compra: </label>
                <select id="opciones">
                    <option value="" disabled selected>--selecione--</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto: </label>
                <input type="number" min="0" placeholder="Tu Precio o Presupuesto" id="presupuesto">

            </fieldset>
            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado </p>

                <div class="forma-contacto">
                    <label>Teléfono </label><input type="checkbox" name="contacto" id="contactar-telefono"> 
                    <label>E-mail </label><input type="checkbox" name="" id="contactar-email"> 
                    
                </div>

                <p> Si elegió teléfono, elija la fecha y la hora</p>
                <label for="fecha">Fecha: </label>
                <input type="date" id="fecha">
                
                <label for="hora">Hora: </label>
                <input type="time" id="hora" min="09:00" max="19:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
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