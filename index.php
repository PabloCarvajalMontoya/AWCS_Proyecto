<!DOCTYPE HTML>
<html lang="es">

<head>
    <title> Recomendador Libros </title>
    <meta charset="utf-8">
    <!--ayuda a visualizar en dispositivos moviles, desactiva el zoom, y permite al usuario moverse solo de arriba a abajo, width=device-width ancho sea igual al ancho del dispositivo, inicio y maximo sea igual a 1 para no usar zoom-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--fuente de Googlefonts-->
    <link href="http://fonts.googleapis.com/css?family=indie+flower" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <header>
        <figure>
            <img src="img/header2.jpg" alt="Recomendador Libros">
        </figure>
        <h1>Recomendador Libros</h1>
        <?php
        session_start();
        ?>

        <nav>
            <ul>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li><a href="agregar_libro.php">Añadir libros</a></li>
                    <li><a href="libros.php">Ver Libros</a></li>
                    <li><a href="ver_sugerencias.php">Ver Sugerencias</a></li>
                    <li><a href="salir.php">Salir</a></li>
                <?php else: ?>
                    <li><a href="recomendador.php">Recomendador de libros</a></li>
                    <li><a href="sugerir.php">Sugerir Libros</a></li>
                    <li><a href="bibliotecas.php">Bibliotecas</a></li>
                    <li><a href="ingresar.php">Iniciar Sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </header>

    <div class="contenedor2">
            <!-- Párrafos adicionales -->
            <h2>Sobre Nuestro Recomendador de Libros</h2>
            <p>Nuestro recomendador de libros es una herramienta creada por un grupo de apasionados lectores con el objetivo de ayudar a
                otros a encontrar nuevas lecturas. Creemos que la literatura es una puerta abierta a innumerables mundos y queremos compartir
                esa experiencia con todos. Desde novelas de ficción que te transportan a universos desconocidos, hasta ensayos que te hacen
                reflexionar sobre la condición humana, en nuestro sitio puedes encontrar una amplia variedad de recomendaciones literarias.
                Nos esforzamos por ofrecer una selección diversa que satisfaga los gustos de todo tipo de lectores, independientemente de sus
                intereses literarios. No importa si eres un ávido lector o alguien que busca su próxima gran aventura literaria, nuestro
                recomendador de libros tiene algo especial para ti.</p>
            <p>Te invitamos a participar activamente en nuestra comunidad, sugiriendo tus libros favoritos y descubriendo nuevas lecturas
                a través de las recomendaciones de otros usuarios. Compartir tus experiencias literarias no solo enriquece tu propio mundo,
                sino que también puede iluminar el camino de otros lectores en busca de nuevas historias. Al formar parte de esta comunidad,
                estás contribuyendo a la creación de un espacio donde la literatura se celebra y se comparte. Así que no dudes en explorar,
                sugerir y, sobre todo, disfrutar de todo lo que nuestro recomendador de libros tiene para ofrecer. Esperamos que este sitio se
                convierta en tu punto de referencia para todas tus necesidades literarias, donde siempre encontrarás algo que despierte tu
                curiosidad y satisfaga tu amor por los libros.</p>
        </div>
        <p>
        <p>
        <p>
        <p>
    
    <section>
        <!--banner lateral noticias-->
        <div class="noticias">
            <h2>Recomendaciones de la semana</h2>
            <article class="post">
                <figure>
                    <img src="img/Esquirla del amanecer_.jpg" alt="Esquirla del amanecer_">
                </figure>
                <h3>Esquirla del Amanecer: <br>Brandon Sanderson</h3>
                <p>Tras el descubrimiento de un barco fantasma, cuya tripulación al parecer murió intentando
                    llegar a la isla de Akinah, rodeada por tormentas, Navani Kholin deberá enviar una
                    expedición para asegurarse de que la isla no haya caído en manos enemigas. Los Caballeros
                    Radiantes que vuelan demasiado cerca de Akinah se encuentran de pronto con su luz
                    tormentosa drenada, por lo que la travesía debe realizarse por mar.

                    La naviera Rysn Ftori perdió el uso de las piernas, pero ganó la compañía de Chiri-Chiri,
                    una larkin alada que se alimenta de luz tormentosa y pertenece a una especie que se creía
                    extinta.
                    recupere podría encontrarse en el hogar ancestral de los larkin, Akinah.<br><br> Con la ayuda de
                    La mascota de Rysn ha enfermado y la única esperanza de que Chiri-Chiri se
                    Lopen, el Corredor del Viento que antes era manco, Rysn tendrá que aceptar el encargo de
                    Navani y navegar hacia el interior de la peligrosa tormenta, de la que nadie ha vuelto
                    con vida. Si su tripulación no logra desvelar los secretos de la isla oculta antes de
                    que caiga sobre ellos la ira de sus antiguos guardianes, el destino de Roshar y de todo
                    el Cosmere penderá de un hilo.
                </p>
                <iframe width="380" height="315" src="https://www.youtube.com/embed/h5NN3Pogkco?si=pi8ybM9Gzzv1x88p"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </article>
            <article class="post">
                <figure>
                    <img src="img/CAPITANA MARVEL.jpg" alt="AntiHeroe">
                </figure>
                <h3>Life Of Captain Marvel Vol 01 - Marvel Comics</h3>
                <p>Recopila la vida del Capitán Marvel #1-5. ¡Es una de las heroínas más poderosas no solo de
                    la Tierra sino de toda la galaxia! ¡Ahora aprende exactamente cómo Carol Danvers se
                    convirtió en la mujer que es, la Vengadora que es, en el origen definitivo del Capitán
                    Marvel! Cuando los ataques de ansiedad repentinos y paralizantes dejan de lado a Carol
                    en medio de una pelea, se encuentra reviviendo recuerdos de una vida que pensó que había
                    quedado atrás. No puedes huir de donde eres y, a veces, tienes que volver a casa. Pero
                    mientras Carol se ausenta temporalmente del servicio para desentrañar su pasado, los problemas la
                    buscan. Se ha desatado un arma y el tranquilo pueblo costero de Carol está a punto de convertirse en
                    el centro de su mundo. Pero hay esqueletos en el armario de la Capitana Marvel, ¡y lo que descubre
                    cambiará su vida por completo!.</p>
            </article>
        </div>
        <!--articulo-->
        <article class="recomienda reco1">
            <figure><img src="img/BAJO-UN-CIELO-BANCO.jpg" alt="BAJO-UN-CIELO-BANCO"></figure>
            <span class="subtit">Bajo un cielo Blanco</span>
            <h2>Elizabeth Kolbert</h2>
            <p>Elizabeth Kolbert reflexiona sobre el mundo que hemos creado y los cambios que hemos ocasionado
                en nuestro planeta. En su recorrido habla con especialistas biólogos, físicos, ingenieros
                de distintas partes del mundo que, con distintos proyectos, tratan de hacer un mundo más
                sostenible.</p>
            <div>
                <span><strong>Genero Literario</strong></span>
                <ul>
                    <li>Ensayo</li>
                </ul>
            </div>
        </article>
        <article class="recomienda reco3"><!--hay dos clases-->
            <figure><img src="img/CUENTO-DE-HADAS-P.png" alt="CUENTO-DE-HADAS-P"></figure>
            <span class="subtit">Cuento de hadas</span>
            <h2>Stephen King</h2>
            <p>El libro se centra en Charlie, un muchacho que ha aprendido a valerse por sí mismo desde
                muy pequeño. Su vida dio un giro cuando su madre fue atropellada y su padre empezó a tomar
                sin control.

                El joven tiene como amigos a una perra llamada Radar y a un enigmático ermitaño. Un día,
                cuando el eremita fallece, le deja una cinta de casete donde le cuenta su gran secreto:
                dentro de su guarida hay un portal que conduce a otro mundo.</p>
            <div>
                <span><strong>Genero Literario</strong></span>
                <ul>
                    <li>Novela</li>
                </ul>
            </div>
        </article>
        <article class="recomienda reco2">
            <figure><img src="img/Donquijote.jpg" alt="Don Quijote"></figure>
            <span class="subtit">Don Quijote</span>
            <h2>Miguel de Cervantes</h2>
            <p>Don Quijote de la Mancha es una novela moderna y la primera novela polifónica escrita por el español
                Miguel de Cervantes Saavedra. Publicada su primera parte con el título de El ingenioso hidalgo don
                Quijote de la Mancha a comienzos de 1605, es la obra más destacada de la literatura española y una de
                las principales de la literatura universal. En 1615 apareció su continuación con el título de Segunda
                parte del ingenioso caballero don Quijote de la Mancha. El Quijote de 1605 se publicó dividido en cuatro
                partes; pero al aparecer el Quijote de 1615 en calidad de Segunda parte de la obra, quedó revocada de
                hecho la partición en cuatro secciones del volumen publicado diez años antes por Cervantes.2.
            </p>
            <div>
                <span><strong>Genero Literario</strong></span>
                <ul>
                    <li>Novela</li>
                    <li>Satira</li>
                    <li>Parodia</li>
                    <li>Farsa</li>
                    <li>Ficción</li>
                </ul>
            </div>
        </article>
        <article class="recomienda reco3">
            <figure><img src="img/solo-humo.jpg" alt="solo-humo"></figure>
            <span class="subtit">Sólo humo</span>
            <h2>Juan José Millas</h2>
            <p>Cuando Carlos cumple 18 años recibe la noticia de que su padre, a quien nunca conoció, ha
                muerto. Lo más sorpresivo es que recibe en herencia su casa y allí descubrirá un mundo que
                lo transformará por completo.
            </p>
            <div>
                <span><strong>Genero Literario</strong></span>
                <ul>
                    <li>Novela</li>
                </ul>
            </div>
        </article>
        <article class="recomienda reco3">
            <figure><img src="img/EL ANCHO MUNDO 2.jpg" alt="EL ANCHO"></figure>
            <span class="subtit">El ancho mundo</span>
            <h2>Pierre Lemaitre</h2>
            <p>Esta novela se centra en los miembros de la familia Pelletier, un clan que ha prosperado
                gracias a la fábrica de jabones en Beirut. Con el paso del tiempo, los hijos tienen otros
                planes para su futuro, lejos del negocio familiar.

                Jean, el primogénito, se muda a París para vivir del comercio de telas. François busca
                abrirse un hueco como periodista también en la misma ciudad. Por su parte, Étienne se
                marcha a Saigón para unirse con su enamorado, pero termina involucrado en una red de tráfico
                de capitales. Hélène, la pequeña, busca desesperadamente encontrar su lugar en el mundo y
                perder de vista a sus padres.
            </p>
            <div>
                <span><strong>Genero Literario</strong></span>
                <ul>
                    <li>Novela</li>
                </ul>
            </div>
        </article>
        <article class="recomienda reco2">
            <figure><img src="img/De la tierra a la luna.JPG" alt="de la tierra a luna"></figure>
            <span class="subtit">De la Tierra a la Luna</span>
            <h2>Julio Verne</h2>
            <p>En el Gun Club de Baltimore, tres científicos aficionados preparan el mayor
                salto intentado nunca por los hombres, sirviendose de un proyectil, que contiene
                una cabina para los decimonónicos astronautas, y un gigantesco cañón para dispararlo más
                allá de la atmósfera.
            <div>
                <span><strong>Genero Literario</strong></span>
                <ul>
                    <li>Ciencia ficción </li>
                    <li>Ficción de aventuras</li>
                    <li>Novela científica</li>
                </ul>

            </div>
        </article>
    </section>
    <footer>
        <span>Proyecto Final - Grupo 5</span>
    </footer>
    <!--Codigo de JavaScript para el Contenedor de Imagenes-->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>

    <script type="text/javascript">//<![CDATA[
        $(function () {
            $('#slider div:gt(0)').hide();
            setInterval(function () {
                $('#slider div:first-child').fadeOut(0)
                    .next('div').fadeIn(1000)
                    .end().appendTo('#slider');
            }, 3000);
        });
        //]]>
    </script>
    <!--FIN del script de JavaScript-->
</body>

</html>