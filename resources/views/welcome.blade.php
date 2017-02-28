<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToolPass</title>

    {{--Styles--}}
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

{{------LOGO-----}}
<div class="logo center-align">
    <img src="img/logo-v2.png" alt="logo_toolpass">
</div>

{{--LOG IN / Sign UP--}}
<div class="container">
    <div class="row">
        <h5 class="center-align">Войдите чтобы пользоваться ToolPass</h5>
        <div class="forms">
            <div class="col l4 s12 offset-l4">
                <div class="card-panel hoverable">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}"
                                       required>
                                <label for="email" data-error="не верно" data-success="верно">Введите
                                    адресс электронной почты</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field">
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password" data-error="не верно" data-success="верно">Введите Пароль</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn_submit">
                            Войти
                        </button>
                    </form>
                </div>
            </div>

            <div class="col l4 s12 offset-l4">
                <a href="{{url('/registration')}}" class="card-hover">
                    <div class="card-panel hoverable center-align">
                        <h5>Создать аккаунт</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!--  scripts -->
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>
