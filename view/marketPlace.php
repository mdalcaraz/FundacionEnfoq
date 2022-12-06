<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../assets/img/iconoNavegador.png">
    <title><?php echo $WEB['Name'] . " Tienda"; ?></title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Enfoq</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#Inicio" class="nav__link">Inicio</a></li>
                    <li class="nav__item"><a href="#Contacto" class="nav__link">Contacto</a></li>
                    <li class="nav__item"><a href="#Equipo" class="nav__link">Equipo</a></li>
                    <li class="nav__item"><a href="#AreasDetrabajo" class="nav__link">Areas de Trabajo</a></li>
                    <li class="nav__item"><a href="" class="nav__link active" target="_Blank">Colaborá</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
       
        <!--===== WORK =====-->
        <section class="work section" id="AreasDetrabajo">
            <h2 class="section-title">Articulos</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="assets/img/work1.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work2.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work3.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work4.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work5.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work6.jpg" alt="">
                </div>
            </div>
        </section>

    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Enfoq</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p>&#169; 2022 copyright all right reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>