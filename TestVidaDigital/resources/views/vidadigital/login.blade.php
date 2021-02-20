<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estiloLogin.css')}}">
    <script src="{{asset('js/jQuery.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</head>
<body >
  <header>
  <nav class="tras_narbar  navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><img src="{{asset('/img/Logo6.png')}}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse " id="navbarSupportedContent">
      <div class="ms-auto p-2 bd-highlight">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class=" nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/vidadigital')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class=" nav-link active" aria-current="page" href="{{url('/vidadigital/login')}}">LOGIN</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>

</header>
{{------------------------------------------------------------------------------------------}}
  <div class="container">
    <div class="row justify-content-center pt-1 mt-1 m-1">
      <div class="col-md-6 col-lg-5 col-sm-8 col-xl-6 formulario">
        <form  id="form" onsubmit="return validar()"> 
          
          <div class="form-group text-center pt-3">
            <h1 class="text-light">Iniciar Sesión</h1>
          </div>
          <div class="form-group mx-sm-4 pt-3">
            <input type="email" id="email" class="form-control text-center" placeholder="Email">
          </div>
          <br>
          <div class="form-group mx-sm-4 pb-3">
            <input type="password" id="password" class="form-control text-center" placeholder="Contraseña">
          </div>
          <br>
          <div class="form-group mx-sm-4 pb-2">
            <input  type="submit"  class="btn btn-block ingresar" value="Login"></input>
          </div>
          <div class="form-group  mx-sm-4 text-center ">
            <span ><a href="#" class="olvide">Olvide mi Contraseña</a></span>
          </div>
          <div class="form-group text-center">
            <span><a href="#" class="olvide1">REGISTRARSE</a></span>
          </div>
          <p class="error" id="error"></p>
      
        </form>
        
      </div>
    </div>
  </div>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>