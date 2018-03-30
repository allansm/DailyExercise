<html>
    <head>
        <title>DailyExercise</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset("/css/login.css")}}" />
    </head>
    <body>
        <div class="wrapper">
          <form class="form-signin" method="post" action="{{route("autenticar")}}">
             {!! csrf_field() !!}
            <h2 class="form-signin-heading">Login</h2><br/>
            <input type="text" class="form-control" name="login" placeholder="Usuario"  autofocus="" /><br/>
            <input type="password" class="form-control" name="password" placeholder="Senha" /><br/>      
            <label class="checkbox">
                <a href="{{route("cadastro")}}">Registre-se Aqui</a>
            </label><br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Autenticar</button>   
          </form>
        </div>
    </body>
</html>




