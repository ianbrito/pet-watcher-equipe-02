<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="../css/global.css">
   <link rel="stylesheet" href="../css/login/login.css">
   <link rel="stylesheet" href="../css/credenciada/credenciada.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Exo+2:ital,wght@0,100;0,200;0,300;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@300&display=swap" rel="stylesheet">
   <title>Pet Watcher</title>
</head>
<body style="background-image:url('../fundo-home.png');background-repeat: no-repeat; ">
   <header>
      <nav class="navbar navbar-expand-lg navbar-light  shadow" style="width: 100%;background-color: #4649e9;">
         <div class="container">
            <a class="navbar-brand" href="{{route('home')}}" style="color: white;font-weight:bold ;">Pet Watcher</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div style="flex-direction: row-reverse" class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     @if(auth()->check())
                        <li class="nav-item m">
                              <a class="nav-link" style="color: white;" href="{{route('logout')}}">Logout</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('reset/password')}}" style="color: white;">Atualizar Senha</a>
                        </li>
                        @yield('update-password')
                     @endif

                     @if(auth()->guest())
                        <li class="nav-item">
                              <a class="nav-link" style="color: white;" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" style="color: white;" href="#">Registre-se</a>
                        </li>
                     @endif

                  
                  </ul>
            </div>
         </div>
      </nav>
</header>
<div class="container">
   @yield('content')
</div>
</body>

</html>
