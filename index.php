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
$conectar=mysqli_connect('mysql-8001.dinaserver.com','franc_','sql18%Noviembre95','Francisco');


?>

<div class="loader">

<h3 class="mt-5">Loading</h3>
</div>


        <nav class="nav_radius">
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

        <section id="whoami" >

<div class="container  text-center">
    <div class="reveal  row row-cols-2 g-2">
        <div class="col my-4">
            <div class="card">
                <img src="imgs/Me_in_my_setup.jpg" class="card-img-top" alt=""/>
                <div class="card-body">
                    <p class="card-text" style="font-weight: bold;">
                        ¡Hola!,me llamo Fran soy un programador full stack con mas de 9 años de
                        experiencia en el desarrollo web,en este portfolio te mostraré todos los
                        proyectos que he ido realizando asi como los lenguajes y entornos de
                        programación que domino
                    </p>
                </div>
            </div>
        </div>
   <div class="col my-4">
    <div class="card">

        
         <h1>
    Mi CV
</h1>

            <object data="PDF/CV DAW PORTFOLIO.pdf" type="application/pdf" height="530rem" >
                <p>Unable to display PDF file.
                    <a href="PDF/CV DAW PORTFOLIO.pdf">Download</a>
                    instead.</p>
            </object>

        
    </div>
</div>
    </div>
</div>
        </section>

        <section id="skills">
<div class="container text-center">
        <div class="reveal row row-cols-3 g-3">
<?php 
	$sql="SELECT * FROM `habilidades`";
$result=mysqli_query($conectar,$sql);
while($mostrar=mysqli_fetch_array($result)) {
		
	?>
    <div class="my-3">
    <div class="col ">
        <div class="card">
            <img
                src="<?php echo $mostrar['IMG_LINK'] ?>"
                class="card-img-top"
                alt=""/>
            <div class="card-body">
                <h5 class="card-title"><?php echo $mostrar['TITULO'] ?></h5>
                <p class="card-text">
                <?php echo $mostrar['DESCRIPCIÓN'] ?>
                </p>
            </div>
        </div>
    </div>
    </div>
    <?php 
        }
        ?>
</div>
</div>

        </section>

     
<div class="bg-image img_background">
</div>
<section id="projects">
    <div class="container text-center">
        <div class="reveal row row-cols-3 g-3">
            <?php 
	$sql="SELECT * FROM `proyectos`";
$result=mysqli_query($conectar,$sql);
while($mostrar=mysqli_fetch_array($result)) {
		
	?>
            <div class="my-3">
                <div class="col ">
                    <div class="card">
                        <img src="<?php echo $mostrar['IMG_LINK'] ?>" class="card-img-top" alt=""/>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mostrar['TITULO'] ?></h5>
                            <p class="card-text">
                                <?php echo $mostrar['DESCRIPCIÓN'] ?>
                            </p>
                            <p class="card-text">
                                FrontEnd:<?php echo $mostrar['DETALLES'] ?>
                            </p>
                            <p class="card-text">
                                BackEnd:<?php echo $mostrar['detalles_back'] ?>
                            </p>
                            <p class="card-text">
                                <a href="<?php echo $mostrar['GITHUB_LINK'] ?>">
                                    <button type="button" class="btn btn-outline-dark mb-2">
                                        <i class="bi bi-github"></i>
                                        Link a github
                                    </button>
                                </a>
                            </p>
                            <p class="card-text">
                                <a href="<?php echo $mostrar['WEB_LINK'] ?>">
                                    <button type="button" class="btn btn-outline-info mb-2">
                                        <i class="bi bi-globe-americas"></i>
                                        Link a la web
                                    </button>
                                </a>
                            </p>

                        </div>
                    </div>
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
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Email:FranRocher95@gmail.com
        </div>
        <!-- Copyright -->
    </footer>

</html>