<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Wozial</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/style.css">
    <link href="/css/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->


</head>

<body>
    <?php include 'includes/about.php'; ?>
    <header class="header ">
        <div class="header__content">
            <div class="container">
                <div class="bar center">
                    <a href="index.php">
                        <img src="img/logo.png">
                    </a>
                </div>
            </div>
            <div class="header__text">
                <h1>Descubre los mejores secretos del MARKETING</h1>
                <form class="form">
                    <fieldset>
                        <legend>Aprende las 5 estrategias de marketing mas efectivas</legend>
                        <div class="container-fields">
                            <div class="field">
                                <input class="input-text" type="text" placeholder="Nombre">
                            </div>
                            <div class="field">
                                <input class="input-text" type="text" placeholder="Apellido">
                            </div>
                            <div class="field">
                                <input class="input-text" type="mail" placeholder="Correo">
                            </div>
                            <div class="field">
                                <input class="input-text" type="text" placeholder="Sitio Web">
                            </div>
                        </div>
                        <div>
                            <a href="/Docs/guia_estrategia_mkt_digital.pdf" download="Estrategias de Marketing Digital" data-aos="fade-up" class="button" href="#">Descarga la Guía</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </header>
    <div>
        <main>
            <section>
                <h2 class="title">Algunos Datos Importantes</h2>
                <div class="services">
                    <div class="service">
                        <div class="icon">
                            <i class="fa-solid fa-magnifying-glass fa-3x"></i>
                        </div>
                        <h4>Seo</h4>
                        <p>Conoce a profundidad la importancia del SEO.<br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis, magna sed posuere imperdiet, quam diam tincidunt lacus, quis pretium odio quam eget odio. </p>
                    </div>
                    <div class="service">
                        <div class="icon">
                            <i class="fa-solid fa-bullhorn fa-3x"></i>
                        </div>
                        <h4>Marketing</h4>
                        <p>Te mostraremos como comenzar una campaña. <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis, magna sed posuere imperdiet, quam diam tincidunt lacus, quis pretium odio quam eget odio. </p>
                    </div>
                    <div class="service">
                        <div class="icon">
                            <i class="fa-solid fa-share-nodes fa-3x"></i>
                        </div>
                        <h4>Customer Journey</h4>
                        <p>Aprende a rastrear el camino que recorren tus usarios. <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis, magna sed posuere imperdiet, quam diam tincidunt lacus, quis pretium odio quam eget odio. </p>
                    </div>
                </div>
            </section>
            <section class="sa ">
                <div class="strategy background-container">
                    <div class="s__content">
                        <i class="fa-solid fa-gears fa-3x"></i>
                        <h4>Ver nuestras Estrategias</h4>
                        <p>Descarga la guía para ver como atraer, adquirir y retener clientes.</p>
                        <div>
                            <a href="/Docs/guia_estrategia_mkt_digital.pdf" download="Estrategias de Marketing Digital" data-aos="fade-up" class="button-1" href="#">Descargar guía</a>
                        </div>
                    </div>

                </div>
                <div class="agenda background-container ">
                    <div class="a__content">
                        <i class="fa-solid fa-calendar-days fa-3x "></i>
                        <h4>Agenda una cita</h4>
                        <p>Organicemos una cita para impulsa tu presencia en línea.</p>
                        <div>
                            <a data-aos="fade-up" class="button-1" href="#">Agendar</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h2 class="title">Nosotros</h2>
                <div class="about">
                    <div class="card">
                        <h4 class="title">Misión</h4>
                        <p> <?php echo $mision; ?></p>
                    </div>
                    <div class="card">
                        <h4 class="title">Visión</h4>
                        <p><?php echo $mision; ?></p>
                    </div>
                    <div class="card second">
                        <h4 class="title">Valores</h4>
                        <h3 class="title"><?php echo $valores; ?></h3>
                    </div>
                </div>
            </section>
            <section>
                <div class="contact">
                    <h2 class="title">Contacto</h2>
                    <p>Teléfono: <?php echo $telefono ?></php>
                        </h4>
                    <p>Dirección: <?php echo $direccion ?> </p>
                    <p>Correo electrónico: <?php echo $correo ?> </p>
                </div>
            </section>
        </main>
        <footer class="footer">
            <ul>
                <div class="footer-grid">
                    <li>
                        <a class="link" target="_blank" href="<?php echo $facebook; ?>">
                            <i class="fa-brands fa-facebook fa-3x"></i>
                        </a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="<?php echo $insta; ?>">
                            <i class="fa-brands fa-instagram fa-3x"></i>
                        </a>
                    </li>
                </div>
                <p class="title">©2022 Wozial Marketing Lovers</p>
            </ul>
        </footer>
    </div>
</body>

</html>