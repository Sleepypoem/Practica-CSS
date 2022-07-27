<?php

include "components/head.php";
?>

<body>
    <?php
    include "components/navbar.php"
    ?>
    <section>
        <div class="banner">
            <p class="banner-text">“Un viajero sabio nunca desprecia su propio país.”
                <br>
                -- Carlo Goldoni.
            </p>
        </div>
    </section>
    <section>
        <header>
            <h1 class="main">¡Los mejores lugares de El Salvador Aqui!</h1>
        </header>


        <div class="card">

            <h2>Las playas mas hermosas</h2>
            <img src="img/Las-Playas-de-El-Salvador.jpg" alt="Fotografia de Playa el Tunco">
            <p>Descubre las mejores playas de El Salvador, un país con una hermosa costa bañada por
                el Océano Pacífico,
                hogar de playas privilegiadas para la práctica de surf y otras joyas escondidas
                entre espectaculares escenarios naturales.</p>
            <a href="Playas.php"> Mas información</a>

        </div>
        <div class="card">
            <h2>Los departamentos mas pintorescos</h2>
            <img src="img/departamentos-de-el-salvador-min.jpg" alt="Fotografia de Playa el Tunco">
            <p>Para los que aún no han visitado tierras salvadoreñas, recomendamos recorrer los
                departamentos de El Salvador; zonas donde puedes encontrar entretenimiento y calma
                al mismo tiempo, todo depende del destino turístico que selecciones.</p>
            <a href="Departamentos.php"> Mas información</a>
        </div>
        <div class="card">
            <h2>Explora la historia de una gran civilizacion</h2>
            <img src="img/arqueologia-en-el-salvador-.jpg" alt="Fotografia de Playa el Tunco">
            <p>Todos sueñan con vivir una aventura llena de magia cuando son niños. ¿Qué ocurre si
                te decimos que este sueño se puede hacer realidad? Algunos de los lugares más
                importantes de El Salvador te abren las puertas a la mítica cultura de los pueblos
                precolombinos. ¿Estás listo para viajar al pasado y hacer realidad la aventura de
                tus sueños?</p>
            <a href="SitiosArqueologicos.php"> Mas información</a>
        </div>



    </section>
</body>

<?php
include "components/foot.php";
?>