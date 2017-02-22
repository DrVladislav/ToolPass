<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToolPass</title>
    
    {{--Styles--}}
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <style>
        .col > a {
            color: #000;
        }

        .col > a:hover {
            color: #557dbf;
        }

        .logo {
            margin-top: 150px;
        }
    </style>
</head>
<body>

{{--MODAL LOGIN--}}
{{------------------}}
<div id="login" class="modal">
    <div class="modal-content">

        <h4>Войти</h4>
        <br>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}"
                           required>
                    <label for="email">E-Mail адресс</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="password" required>
                    <label for="password">Пароль</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>

{{--MODAL SIGNUP--}}
{{------------------}}
<div id="sign_up" class="modal">
    <div class="modal-content">

        <h4>Регистрация</h4>
        <br>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-field">
                    <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}"
                           required>
                    <label for="name">Логин</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}"
                           required>
                    <label for="email">E-Mail адресс</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="password" required>
                    <label for="password">Пароль</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="input-field">
                    <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                    <label for="password-confirm">Повторите пароль</label>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn">
                    Зарегистрировать
                </button>
            </div>
        </form>
    </div>
</div>

{{------LOGO-----}}
{{---------------}}
<div class="logo center-align">
    <img src="img/logo-v2.png" alt="logo_toolpass">
</div>

{{--LOG IN / Sign UP--}}
{{--------------------}}
<div class="container">
    <div class="row">
        <div class="forms">
            <div class="col l4 s12 offset-l2">
                <a href="#login">
                    <div class="card-panel hoverable center-align">
                        <h5>Войти</h5>
                    </div>
                </a>
            </div>

            <div class="col l4 s12">
                <a href="#sign_up">
                    <div class="card-panel hoverable center-align">
                        <h5>Зарегистрироваться</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!--  scripts -->
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.modal').modal();
    });
</script>
</body>
</html>
