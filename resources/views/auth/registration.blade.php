<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Регистрация</title>

    {{--Styles--}}
    <link rel="stylesheet" href="/css/materialize.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
{{--NAVBAR--}}
<div class="logo center-align">
    <a href="{{url('/')}}"><img src="img/logo-v2.png" alt="logo"></a>
</div>

{{--Registration form--}}
<div class="container">
    <div class="row">
        <div class="col l6 s12 offset-l3">
            <div class="card-panel hoverable">
                <h4 class="center-align">Регистрация</h4>
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="input-field">
                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}"
                               required>
                        <label for="name" data-error="не верно" data-success="верно">Логин</label>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}"
                               required>
                        <label for="email" data-error="не верно" data-success="верно">E-Mail адресс</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field">
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password">Пароль</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field">
                        <input id="password-confirm" type="password" class="validate"
                               name="password_confirmation"
                               required>
                        <label for="password-confirm">Повторите пароль</label>
                    </div>

                    <button type="submit" class="btn-large btn_submit">
                        Зарегистрировать
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- SCRIPTS --}}
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>

</body>
</html>