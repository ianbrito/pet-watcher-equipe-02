<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="global.css">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Exo+2:ital,wght@0,100;0,200;0,300;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@300&display=swap" rel="stylesheet">

   <title>Pet Watcher - Login</title>
</head>
<body>

   <section>
      <h1>Pet Watcher</h1>
      <form action=" {{action('Auth\LoginController@Login')}} " method="post">
         @csrf
         <label>
            Email *
            <input type="text" type="email" name="email" placeholder="login">
         </label>

         <label>
            Senha *
            <input type="password" name="password" placeholder="senha">
         </label>

         <button type="submit">Logar</button>
      </form>

      @if ($errors->has('email') || $errors->has('password'))
        <span class="">
            <strong>Erro ao logar</strong>
        </span>
      @endif

      <div class="links">
         <a href="">Não possuo cadastro!</a>
         <a href="">Esqueci a senha!</a>
      </div>
   </section>
</body>
</html>
