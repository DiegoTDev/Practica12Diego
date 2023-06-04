<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8" />
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
</head>

<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">
                <a href="stem.html">Alejandro Rios Visoso - 21091085</a>
            </h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Cálcular el tiempo de movimiento del cuerpo rocoso</h2>
                <p>Descripción:</p>
                <p>
                    Un volcán de una altura H = 2800 metros, lanza horizontalmente un
                    fragmento rocoso con una velocidad inicial V 0 = 15 m/seg. Hallar:
                    ¿cuánto tiempo se encontrará el fragmento rocoso en movimiento?<br />
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/VolcanRoca.jpg" />
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                Tiempo = √(2 . altura / gravedad)
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                Altura: 2800 M<br />
                Velocidad Inicial = 15 m/seg
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>
                    El tiempo aproximado de movimiento sera: <br />
                    R = t = √(2 . 2800 m / 9,8 m/s²)
                </p>
                <form method="POST" action="">
                    <button type="submit">Presiona para calcular</button>
                </form>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $altura = 2800;
                        $gravedad = 9.8;
                        $tiempoVuelo = sqrt((2 * $altura) / $gravedad);
                        echo $tiempoVuelo . ' segundos';
                    }
                    ?>
                </div>
            </section>
        </section>
        <footer class="pie">Creative Commons versión 3.0 SciSoft 2023</footer>
    </section>
</body>

</html>