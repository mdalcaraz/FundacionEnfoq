<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                        <li class="nav__item"><a href="/colaborar" class="nav__link">Colaborá</a></li>
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
                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
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
                        <h2 class="about__subtitle">Fundacion Enfoq</h2>
                        <p class="about__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab repellendus quia aliquid. Dolorem assumenda tempore eveniet facere nesciunt sapiente exercitationem blanditiis? Recusandae, quaerat. Fuga placeat nesciunt natus sunt eos!
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus quis nam accusamus, fugit veniam incidunt dolorum earum officia odio laboriosam deserunt cum harum rem, doloremque, dolor labore excepturi pariatur numquam!
                        </p>           
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab repellendus quia aliquid. Dolorem assumenda tempore eveniet facere nesciunt sapiente exercitationem blanditiis? Recusandae, quaerat. Fuga placeat nesciunt natus sunt eos!
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus quis nam accusamus, fugit veniam incidunt dolorum earum officia odio laboriosam deserunt cum harum rem, doloremque, dolor labore excepturi pariatur numquam!
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
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2022 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>