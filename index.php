<!DOCTYPE html>

<?php include 'header.php';?>

<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/fondo.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <!-- Imagen del logo agregada aquí -->

                
                <h1 class="animated fadeInDown gradient-background">Universidad de las Fuerzas Armadas ESPE</h1>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="images/video.mp4" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>ESPE</h3>

<p>La Universidad de las Fuerzas Armadas ESPE, ubicada en Ecuador, es una destacada institución de educación superior fundada en 1992, que ofrece una amplia gama de carreras en ingeniería, ciencias administrativas y salud, entre otras. Se caracteriza por su moderna infraestructura y laboratorios equipados, promoviendo la investigación científica y tecnológica, así como la formación integral de sus estudiantes en habilidades blandas y valores éticos. Además, mantiene una fuerte vinculación con la comunidad y el sector productivo, contribuyendo al desarrollo sostenible del país y preparando profesionales competentes y responsables.</p>
<br>

</div>
</div>  
</div>
<div class="col-sm-5 col-md-4">
    </div>
</div>  
</div>
</div>
<!-- reservation-information -->

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/audioguias/1.png" width="15"  class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/audioguias/2.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/audioguias/3.png"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- audio guias-->
            <div class="caption">Audioguías<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>

        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/MUSEO.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/MUSEO1.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/MUSEO2.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Museos Asociados<a href="introduction.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>

        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/espanol.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/ingles.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/ruso.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Idiomas<a  class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->

<?php include 'footer.php';?>

<!-- Incluye la biblioteca de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Botón del chatbot -->
<button class="open-button" onclick="openChat()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    <i class="fas fa-robot" style="margin-right: 10px; animation: bounce 1s infinite;"></i> ESPE-BOT
</button>

<!-- Ventana del chatbot -->
<div class="chat-popup" id="chatForm">
    <div class="form-container">
        <div class="chat-header">
            <h1>
            <i class="fas fa-robot" style="margin-right: 10px; animation: bounce 1s infinite;"></i>    
            ESPE-BOT</h1>
            <button type="button" class="btn close" onclick="closeChat()">×</button>
        </div>
        
        <div class="chat-body">
            <div id="chatOutput" class="chat-output"></div>
            <div class="chat-input">
                <textarea id="query" rows="2" placeholder="Ingrese su consulta aquí"></textarea>
                <button id="sendButton" onclick="sendQuery()">Enviar Consulta</button>
            </div>
        </div>
    </div>
</div>

<script src="js/main.js"></script>

