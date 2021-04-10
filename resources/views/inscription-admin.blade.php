<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inscription-admin.css">
    <title>Inscription</title>
</head>
<body>
    <div class="head  bg-warning">
        <div class="text-center">
                <img src="images/logo.png" alt="logo-gasmo" width="15%" height="160px">
        </div>
    </div>
        <div class="login-page">
                <div class="form">
                    <h1 class="text-center test">Inscription</h1>
                  <form class="login-form" method="POST" action="{{route('enregistrer')}}">
                    @csrf
                        @if(Session::has('post_register'))
                            <h6 class="text-danger  text-center">{{Session::get('post_register')}}</h6><br>
                        @endif
                        <input name="name" type="text" placeholder="nom"/>
                        <input name="forname" type="text" placeholder="prenom"/>
                        <input name="email" type="text" placeholder="E-mail"/>
                        <input name="password" type="password" placeholder="Mot de passe"/>
                        <input name="passwordrepeat" type="password" placeholder="Retapez votre mot de passe"/>
                        <button type="submit" class="btn btn-danger"><span class="text-body">S'inscrire</span></button>
                        <p class="message text-body">Avez-vous déjà un compte? <a href="#">Se connecter</a></p>
                   </form>
                </div>
        </div>
              <script src="js/appli.js"></script>
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>