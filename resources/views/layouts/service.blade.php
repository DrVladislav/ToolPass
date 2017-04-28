@extends("layouts.template")

@section("title")
    {{$service->service}}
@endsection

@section("content")

    @include("components.navbar")

    <div class="container">
        <div class="row">
            <div class="col s12 l8 m12 offset-l2">
                <div class="card-panel hoverable">
                    <form method="POST" action="{{ url('/toolpass/update') }}">

                        {{ csrf_field() }}

                        {{ method_field('PUT') }}

                        <div class="input-field ">
                            <input value="{{$service->service}}" id="service" type="text" class="validate">
                            <label class="active" for="service">Название сервиса</label>
                        </div>

                        <div class="input-field">
                            <input value="{{$service->login}}" id="login" type="text" class="validate">
                            <label class="active" for="login">Логин</label>
                        </div>

                        <div class="input-field">
                            <input value="{{$service->email}}" id="email" type="text" class="validate">
                            <label class="active" for="email">Почта</label>
                        </div>

                        <div class="input-field">
                            <input value="{{$service->password}}" id="password" type="text" class="validate">
                            <label class="active" for="password">Пароль</label>
                        </div>
                        @if($service->others)
                        {{-- TODO make right with controller --}}
                        <div class="row">
                            <div class="col s6 l6 m6">
                                <div class="input-field">
                                    <input value="{{$service->others}}" id="others" type="text" class="validate">
                                    <label class="active" for="others">Доп поля</label>
                                </div>
                            </div>
                            <div class="col s6 l6 m6">
                                <div class="input-field">
                                    <input value="{{$service->others}}" id="others" type="text" class="validate">
                                    <label class="active" for="others">Доп поля</label>
                                </div>
                            </div>
                        </div>
                        @endif

                        <button type="submit" class="btn btn_submit">
                            Обновить
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>
    {{--
    <div class="container">
        <div class="row">
            <div class="card-panel hoverable">
                <div class="input-field col s12 l6 m6 offset-l3">
                    <input value="{{$service->service}}" id="service" type="text" class="validate">
                    <label class="active" for="service">Название сервиса</label>
                </div>

                <div class="input-field col s12 l6 m6 offset-l3">
                    <input value="{{$service->login}}" id="login" type="text" class="validate">
                    <label class="active" for="login">Логин</label>
                </div>

                <div class="input-field col s12 l6 m6 offset-l3">
                    <input value="{{$service->email}}" id="email" type="text" class="validate">
                    <label class="active" for="email">Почта</label>
                </div>

                <div class="input-field col s12 l6 m6 offset-l3">
                    <input value="{{$service->password}}" id="password" type="text" class="validate">
                    <label class="active" for="password">Пароль</label>
                </div>

                <div class="input-field col s12 l6 m6">
                    <input value="{{$service->others}}" id="password" type="text" class="validate">
                    <label class="active" for="others">Доп поля</label>
                </div>
            </div>
        </div>
    </div>
--}}
    @include("components.float")

@endsection