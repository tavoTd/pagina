<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
    <title>Restaurante</title>
</head>
<body>
    <header>
       <div class="row">
          <div class="col-lg-1 col-md-1 col-ms-1 col-xs-4">
              <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="imagen" class="center-block">
          </div>
          <div class="clo-lg-11 col-md-11 col-ms-11 col-xs-8">
              <h2>Restaurante & Bar</h2>
          </div>
       </div>
       <nav class="navbar navbar-default navbar-inverse" role="navigation"> 
         <!-- Reagrupacion del contenido en móviles -->
         <div class="navbar-header">
             <a class="navbar-brand" href="#">Inicio</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Desplegar navegación</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
         </div>
         <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
         <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-inverse">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     Platillos <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu fondo">
                    <li><a href="entradas.html" id="letra">Entradas</a></li>
                    <li><a href="#" id="letra">Plato fuerte</a></li>
                    <li><a href="#" id="letra">Postres</a></li>
                    <li><a href="#" id="letra">Bebidas</a></li>
                  </ul>
               </li>
               <li><a href="#">Reservaciones</a></li>
               <li><a href="#">Eventos</a></li>
               <li><a href="#">Quienes Somos</a></li>
               <li><a href="#">Certificaciones</a></li>
            </ul>
         </div>
       </nav>
    </header>
    <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target= "#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target= "#myCarousel" data-slide-to="1" class></li>
            <li data-target= "#myCarousel" data-slide-to="2" class></li>
            <li data-target= "#myCarousel" data-slide-to="3" class></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img class="first-slide" src="<?php bloginfo('template_url');?>/img/fachada.jpg" alt="Imagen 1"> 
               <div class="container">
                   <div class="carousel-caption">
                       <h1>Conocenos</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nam odio laboriosam, est, consequatur quam voluptas sunt fuga optio nesciunt possimus impedit. Enim optio unde sequi! Necessitatibus iusto, consequatur ratione.
                       </p>
                       <p>
                         <a href="#" class="btn btn-lg btn-primary" role="button">Mas información</a>
                       </p>
                   </div>
               </div>
            </div>
            <div class="item">
               <img class="first-slide" src="<?php bloginfo('template_url');?>/img/instalaciones.jpg" alt="Imagen 2"> 
               <div class="container">
                   <div class="carousel-caption">
                       <h1>Nuestras Instalaciones</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nam odio laboriosam, est, consequatur quam voluptas sunt fuga optio nesciunt possimus impedit. Enim optio unde sequi! Necessitatibus iusto, consequatur ratione.
                       </p>
                       <p>
                         <a href="#" class="btn btn-lg btn-primary" role="button">Mas información</a>
                       </p>
                   </div>
               </div>
            </div>
            <div class="item">
               <img class="first-slide" src="<?php bloginfo('template_url');?>/img/entretenimiento.jpg" alt="Imagen 3"> 
               <div class="container">
                   <div class="carousel-caption">
                       <h1>Entretenimiento</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nam odio laboriosam, est, consequatur quam voluptas sunt fuga optio nesciunt possimus impedit. Enim optio unde sequi! Necessitatibus iusto, consequatur ratione.
                       </p>
                       <p>
                         <a href="#" class="btn btn-lg btn-primary" role="button">Mas información</a>
                       </p>
                   </div>
               </div>
            </div>
            <div class="item">
               <img class="first-slide" src="<?php bloginfo('template_url');?>/img/especialidades.jpg" alt="Imagen 4"> 
               <div class="container">
                   <div class="carousel-caption">
                       <h1>Especialidades</h1>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nam odio laboriosam, est, consequatur quam voluptas sunt fuga optio nesciunt possimus impedit. Enim optio unde sequi! Necessitatibus iusto, consequatur ratione.
                       </p>
                       <p>
                         <a href="#" class="btn btn-lg btn-primary" role="button">Mas información</a>
                       </p>
                   </div>
               </div>
            </div>
        </div>
        <a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
           </span>
           <span class="sr-only">Previous</span>
        </a>
        <a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>