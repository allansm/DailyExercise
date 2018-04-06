@extends("layouts.app")
@section("head")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("/css/login.css")}}" />
@endsection
@section("content")
    <div class="col-md-12 order-md-1 wrapper">
          
          <form class="needs-validation form-signup" novalidate="" method="post" action="{{route("cadastro.usuario")}}">
             {!! csrf_field() !!}
            <h4 class="mb-3">Cadastro</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" class="form-control" id="firstName" name="nome" placeholder="" value="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Sobrenome</label>
                <input type="text" class="form-control" id="lastName" name="sobrenome" placeholder="" value="" >
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="login" name="login" placeholder="Username" >
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Senha</label>
                <input type="password" class="form-control" id="firstName" name="senha" placeholder="" value="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Confirmar Senha</label>
                <input type="password" class="form-control" id="lastName" name="csenha" placeholder="" value="" >
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email <!--<span class="text-muted">(Optional)</span>--></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
          </form>
        </div>
@endsection

