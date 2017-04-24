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

        <div class="col l6 m12">
            <div class="center-align">
                <h1>Описание </h1>

                <h5>
                    <b>Благодаря этому сервису вы без проблем сможете сохранить пароли и дополнительные данные <br>
                        к другим сервисам или программам.</b>
                </h5>

                <br>

                <p>
                    ToolPass абсолютно бесплатен и является приложением с открытым исходным кодом,
                    <br>
                    который вы можете посмотреть на гитхабе.
                    <br>
                    Ссылка на репозиторий находится в доп. сведеньях
                </p>

            </div>
        </div>

        <div class="col l6 m12">
            <div class="container">
                <div class="row">

                    <h5 class="center-align">Войдите чтобы пользоваться ToolPass</h5>

                    <div class="card-panel hoverable">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

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

                            <div class="input-field">
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password" data-error="не верно" data-success="верно">Введите Пароль</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn_submit">
                                Войти
                            </button>
                        </form>
                    </div>

                    <a href="{{url('/registration')}}" class="card-hover">
                        <div class="card-panel hoverable center-align">
                            <h5>Создать аккаунт</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">О проекте</h5>
                <p class="grey-text text-lighten-4">Начало разработки 2017. Окончание разработки {{ $today->toFormattedDateString() }}</p>
            </div>

            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Доп. сведения</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="https://github.com/DrVladislav/ToolPass"> «Код проекта»</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            © 2017 DrVladislav
        </div>
    </div>

</footer>

<!--  scripts -->
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>
