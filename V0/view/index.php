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
    <title><?php echo $WEB['Name']; ?></title>
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
                    <li class="nav__item"><a href="#Inicio" class="nav__link active">Inicio</a></li>
                    <li class="nav__item"><a href="#Contacto" class="nav__link">Contacto</a></li>
                    <li class="nav__item"><a href="#Equipo" class="nav__link">Equipo</a></li>
                    <li class="nav__item"><a href="#AreasDetrabajo" class="nav__link">Areas de Trabajo</a></li>
                    <li class="nav__item"><a href="/Colaborar" class="nav__link" target="_Blank">Colaborá</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->

        <section class="home bd-grid" id="Inicio">
            <div class="home__data">
                <h1 class="home__title">Fundacion Enfoq<br><span class="home__title-color">Desarrollo Humano</span></h1>

                <a href="#" class="button">Contacto</a>
            </div>

            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-behance'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
                <img src="assets/img/perfil.png" alt="">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="Contacto">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/about.jpg" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">SOBRE NOSOTROS</h2>
                    <ul class="about__text mainList">
                        <li>
                            <b>Mision: </b>Nuestra aspiración es brindar herramientas para el fortalecimiento de las
                            capacidades intelectuales y
                            emocionales propias de cada persona mediante la movilización de los propios recursos y los
                            de su entorno; siendo la
                            nuestra una organización ágil y eficiente, dando protagonismo a la sociedad civil y
                            promoviendo el verdadero desarrollo sostenible.
                        </li>
                        <li>
                            <b>VISION: </b>Construir una cultura de la solidaridad centrada en la persona y en la
                            necesidad
                            de lograr mejores y más dignas condiciones de vida, de trabajo, de igualdad de derechos
                            y de participación social para todos.
                        </li>
                        <li>
                            <b>VALORES : </b>
                            <ul class="subList">
                                <li>
                                    Contribuir a reducir la pobreza y las desigualdades a través del desarrollo
                                    intelectual y
                                    emocional de las personas quienes podrán producir los cambios económicos y sociales
                                    necesarios para un desarrollo social sostenible y equilibrado.
                                </li>
                                <li>
                                    Fomentar la educación y la formación profesional como motores de un desarrollo
                                    duradero, generador de riqueza y protagonismo socia.
                                </li>
                                <li>
                                    Favorecer la promoción de la mujer en todos los sectores y actividades para
                                    incrementar su participación social e incentivar su acceso a la toma de decisiones.
                                </li>
                                <li>
                                    Apoyar a las minorías para garantizar el acceso de todos, en condiciones de justicia
                                    y
                                    equidad, a los bienes y servicios básicos y para fomentar el pleno goce de sus
                                    derechos
                                </li>
                            </ul>

                        </li>
                    </ul>

                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="Equipo">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab repellendus quia aliquid.
                        Dolorem assumenda tempore eveniet facere nesciunt sapiente exercitationem blanditiis?
                        Recusandae, quaerat. Fuga placeat nesciunt natus sunt eos!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus quis nam accusamus, fugit veniam
                        incidunt dolorum earum officia odio laboriosam deserunt cum harum rem, doloremque, dolor labore
                        excepturi pariatur numquam!
                    </p>

                </div>

                <div>
                    <img src="assets/img/work3.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="AreasDetrabajo">
            <h2 class="section-title">Work</h2>

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