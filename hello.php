<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FranDev</title>
        <link rel="stylesheet" href="portfolio.css">
        <script src="portfolio.js"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
            integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
            integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
            crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <?php 
$conectar=mysqli_connect('127.0.0.1','root','','portfolio');


?>



        <nav>
            <div class="container">
                <ul>
                    <li class="home active">
                        <a href="#whoami">¿Quien soy?</a>
                    </li>
                    <li class="about">
                        <a href="#skills">Habilidades</a>
                    </li>
                    <li class="contact">
                        <a href="#projects">Proyectos</a>
                    </li>
                </ul>
            </div>
        </nav>

    </head>

    <body>

        <section id="whoami" class=" px-1 py-1">
            <div class="revealfirst  my-3 container overflow-hidden text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="card">
                            <div class="p-3">
                                <img
                                    src="imgs/1000_F_88538986_5Bi4eJ667pocsO3BIlbN4fHKz8yUFSuA.jpg"
                                    style="width:200px;height:100px"
                                    alt="">

                            </div>
                            <div class="p-3">

                                <h3>¡Hola!,me llamo Fran soy un programador full stack con mas de 9 años de
                                    experiencia en el desarrollo web,en este portfolio te mostraré todos los
                                    proyectos que he ido realizando asi como los lenguajes y entornos de
                                    programación que domino</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="p-3">
                                <h1>Mi CV</h1>
                                <object
                                    data="PDF/CV DAW PORTFOLIO.pdf"
                                    type="application/pdf"
                                    width="100%"
                                    height="500px">
                                    <p>Unable to display PDF file.
                                        <a href="PDF/CV DAW PORTFOLIO.pdf">Download</a>
                                        instead.</p>
                                </object>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="skills">

            <div class="  text-center">
                <div class=" revealmiddle row row-cols-5 ">

                    <?php 
	$sql="SELECT * FROM `habilidades`";
$result=mysqli_query($conectar,$sql);
while($mostrar=mysqli_fetch_array($result)) {
		
	?>
                    <div class=" card col mx-5 my-5   bg-white">

                        <div class="p-2">
                            <img style="width:70px;height:70px" src="<?php echo $mostrar['IMG_LINK'] ?>">

                            <h5 ><?php echo $mostrar['TITULO'] ?></h5>
                            <p><?php echo $mostrar['DESCRIPCIÓN'] ?></p>
                        </div>
                        
                    </div>
                    <?php 
        }
        ?>

                </div>
            </div>

        </section>

        <div class="img"></div>

<section id="projects">
    <div class="text-center">
        <div class=" revealfinal row row-cols-5">
        <?php 
	$sql="SELECT * FROM `proyectos`";
$result=mysqli_query($conectar,$sql);
while($mostrar=mysqli_fetch_array($result)) {
		
	?>
            <div class="card col mx-5 my-5 ">
                <div class="p-2">
                    <img
                        src="<?php echo $mostrar['IMG_LINK'] ?>"
                        style="width:200px;height:100px"
                        alt="">

                        <h5 ><?php echo $mostrar['TITULO'] ?></h5>

                        <p ><?php echo $mostrar['DESCRIPCIÓN'] ?></p>
                        <p>FrontEnd:<?php echo $mostrar['DETALLES'] ?> </p>
                        <p>BackEnd: <?php echo $mostrar['detalles_back'] ?></p>
                        <a href="<?php echo $mostrar['GITHUB_LINK'] ?>">
                            <button type="button" class="btn btn-outline-dark mb-2">
                                <i class="bi bi-github"></i>
                                Aqui va el link de github
                            </button>
                        </a>
                        <a href="<?php echo $mostrar['WEB_LINK'] ?>">
                            <button type="button" class="btn btn-outline-info">
                                <i class="bi bi-globe-americas"></i>
                                Aqui va el link a la web
                            </button>
                        </a>
                    </div>
                </div>
                <?php 
        }
        ?>
            </div>

        </div>

    </section>

    </body>
    <script>
        $(window).load(function () {
            $(".loader").fadeOut("slow");
        });
    </script>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="bi bi-1-square"></i >
                </a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="bi bi-2-square"></i >
                </a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="bi bi-3-square"></i >
                </a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="bi bi-4-square"></i >
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="bi bi-5-square"></i >
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="bi bi-6-square"></i >
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</html>