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
                <a href="stem.html">Diego Rodrigo Tellez Frias - 21091106</a>
            </h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema:Cálcular la distancia de la superficie de la Tierra,
                    considerando que la aceleracion sea igual a 1 m/s^2</h2>
                <p>Descripción:</p>
                <p>
                    ¿A que distancia de la superficie de la Tierra, la aceleracion de la
                    gravedad sera igual a 1m/s^2?<br />
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="./images/Superficie.jpg" />
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                g= G*M/R^2<br />
                Superficie= g/2=Gm/(R+g)^2
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                g=9.81 m/^2<br />
                r=6.37x10^3<br />
                gr=1 m/s^2<br />
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>
                    Gravedad en la altura = 9.8 x ( 6371000 / ( 6371000 + 1)²)
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
                        $gravedadSuperficie = 9.8;
                        $radioTierra =  6371000;
                        $altura = 1;
                        $gravedadEnAltura = $gravedadSuperficie * ($radioTierra / pow((($radioTierra * $altura)), 2));
                        echo $gravedadEnAltura . ' gravedad';
                    }
                    ?>
                </div>
            </section>
        </section>
        <footer class="pie">Creative Commons versión 3.0 SciSoft 2023</footer>
    </section>
</body>

</html>
