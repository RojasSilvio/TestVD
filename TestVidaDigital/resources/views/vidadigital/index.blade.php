<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  

  <title>Vida Digital</title>
  
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  <script src="{{asset('js/jQuery.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
</head>
<body >
  <header>
  <div > 
  <nav class="tras_narbar  navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><img src="{{asset('/img/Logo6.png')}}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <div class="ms-auto p-2 bd-highlight color-hl">
      <ul class="   navbar-nav me-auto mb-2 mb-lg-0">
        <li class=" nav-item ">
          <a class="nav-link active"  aria-current="page" href="{{url('/vidadigital')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class=" nav-link active" aria-current="page" href="{{url('/vidadigital/login')}}">LOGIN</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
</div>
    <section class="texto-header">
      <div class="portada">
        <h1>TE GUIAMOS HACIA LA TRANSFORMACION DIGITAL</h1>
        <h2>CONSTRUCCIÓN DE SERVICIOS PARA EL MUNDO DE HOY.</h2>
      </div>
      
    </section>
  </header>
 <main>
   <section  >
      <div >
        <div class="coleccion"> 
            <div class="tipo-soft">
              <a href="#" class="soft" category="desarrolloWeb">Desarrollo Web</a>
              <a href="#" class="soft" category="desarrolloMovil">Desarrollo Móvil</a>
              <a href="#" class="soft" category="apis">API´s</a>
            </div>

            <section class="soft-img ">
              
              <div class="item col-md-6 col-sm-6"category="desarrolloWeb">
                <img src="{{asset('img/software/VD-JS.png')}}" alt="">
                <a href="#">JavaScript</a>
              </div>
              <div class="item col-md-6 col-sm-6" category="desarrolloWeb">
                <img src="{{asset('img/software/VD-Csharp.png')}}" alt="">
                <a href="#">C#</a>
              </div>
              <div class="item col-md-6 col-sm-6 " category="desarrolloWeb">
                <img src="{{asset('img/software/VD-HTML.jpg')}}" alt="">
                <a href="#">HTML</a>
              </div>
              <div class="item col-md-6 col-sm-6" category="desarrolloWeb">
                <img src="{{asset('img/software/VD-CSS.png')}}" alt="">
                <a href="#">CSS</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="desarrolloWeb">
                <img src="{{asset('img/software/VD-REACT.jpeg')}}" alt="">
                <a href="#">React</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="desarrolloWeb">
                <img src="{{asset('img/software/VD-VUE.jpeg')}}" alt="">
                <a href="#">VUE</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="desarrolloWeb">
                <img src="{{asset('img/software/VD-PHP.png')}}" alt="">
                <a href="#">PHP 8</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="desarrolloWeb">
                <img src="{{asset('img/software/VD-NODEJS.png')}}" alt="">
                <a href="#">NODE</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="desarrolloMovil">
                <img src="{{asset('img/software/VD-KOTLIN.png')}}" alt="">
                <a href="#">Kotlin</a>
              </div>
              <div class="item col-md-2 col-sm-2 " category="desarrolloMovil">
                <img src="{{asset('img/software/VD-REACTNATIVE.png')}}" alt="">
                <a href="#">REACTNATIVE</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="desarrolloMovil">
                <img src="{{asset('img/software/VD-SWIFT.jpg')}}" alt="">
                <a href="#">SWIFT</a>
              </div>
              <div class="item col-md-2 col-sm-2 " category="desarrolloMovil">
                <img src="{{asset('img/software/VD-JS.png')}}" alt="">
                <a href="#">JavaScript</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="apis">
                <img src="{{asset('img/software/VD-NODEJS.png')}}" alt="">
                <a href="#">NODEJS</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="apis">
                <img src="{{asset('img/software/VD-PY.jpg')}}" alt="">
                <a href="#">PYTHON</a>
              </div>
              <div class="item col-md-2 col-sm-2" category="apis">
                <img src="{{asset('img/software/VD-PHP.png')}}" alt="">
                <a href="#">PHP 8</a>
              </div>
              <div class="item col-md-3 col-sm-4 col-xs-6" category="apis">
                <img src="{{asset('img/software/VD-REACT.jpeg')}}" alt="">
                <a href="#">REACT</a>
              </div>
              
              
            </section>
            </div>
        </div>
        
      </div>
      
    </section>
    <section class="seccion3">
      <div class="container">
        <h1 class=" text-center">
                Brindamos soluciones a medida.
            </h1>
            <h5 class="text-center">
                Entendemos que cada organizacion es compleja y única por lo que nos comprometemos al 100% con cada proyecto.
            </h5>
            <p class="text-center">
                <a class="btn btn-warning">Únete al Team</a>
            </p>
      </div>
    </section>
 </main>
  <footer>
    <div class="contenedor-footer">
      <div class="content-foo">
        <p>Todos los derechos reservados</p>
      </div>
    </div>
    <h2 class="titulo-final">&copy; VD</h2>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>