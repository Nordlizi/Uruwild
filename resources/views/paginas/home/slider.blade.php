
<div  class="{{-- masthead --}} get_width_100 mostrar-cabecera-destop"  >
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto1.jpg" alt="First slide">
     
      
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto2.jpg" alt="Second slide">
       
    </div>
    <div class="carousel-item">
      <img class="img-slider-size" src="{{url()}}/imagenes/Slider/uruwild_portada_foto3.jpg" alt="Third slide">
       
    </div>
  </div>

      <div class="carousel-caption d-none d-md-block Helper-OrdenarHijos-Row">
        @include('paginas.home.datos_para_carousel')
      </div>
      <img src="{{url()}}/imagenes/Empresa/uruwild_logo_white.png" style="position:absolute; right: 5%; bottom: 5%; height: 5%;">  
  

</div>



 
</div>

<div class="get_width_100 ocultar-cabecera-mobil">
  

 <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>¿TE APASIONAN LA NATURALEZA, EL ECOTURISMO Y LA PESCA?</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Te invitamos a vivir una experiencia que te hará renacer.</p>
            <p class="text-faded mb-2 text-white">#MORETHANFISHING</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">¡DAME DOS!</a>
          </div>

          <div class="col-md-6 mx-auto mt-4">
              <span class="col-md-4 mx-auto"><a href=""><span class="socicon socicon-facebook"></span></a></span>
              <span class="col-md-4 mx-auto"><a href=""><span class="socicon socicon-instagram"></span></a></span>
              <span class="col-md-4 mx-auto"><a href=""><span class="socicon socicon-twitter"></span></a></span>
          </div>
        </div>
      </div>
    </header>
</div>    
