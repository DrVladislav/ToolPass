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
                    <form class="form" method="POST" action="{{ url('/toolpass/update/'.$service->id) }}">

                        {{csrf_field()}}

                        {{method_field('PUT')}}

                        <div class="input-field ">
                            <input value="{{$service->service}}" id="service" type="text" class="validate service" name="service">
                            <label class="active" for="service">Название сервиса</label>
                        </div>

                        <div class="input-field">
                            <input value="{{$service->login}}" id="login" type="text" class="validate login" name="login">
                            <label class="active" for="login">Логин</label>
                        </div>

                        <div class="input-field">
                            <input value="{{$service->email}}" id="email" type="text" class="validate email" name="email">
                            <label class="active" for="email">Почта</label>
                        </div>

                        <div class="input-field">
                            <input value="{{$service->password}}" id="password" type="text" class="validate password" name="password">
                            <label class="active" for="password">Пароль</label>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <div class="input-field">
                                    <textarea id="area" class="materialize-textarea" name="others">{{$service->others}}</textarea>
                                    <label for="area">Заметки</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col l6 m12 s12 offset-l3">
                                <button type="submit" class="btn btn_submit l6">
                                    Обновить
                                </button>
                            </div>
                        </div>
                    </form>


                    <form method="POST" action="{{ url('/toolpass/delete/'.$service->id) }}">

                        {{ csrf_field() }}

                        {{ method_field('DELETE') }}

                        <div class="row">
                            <div class="col l6 m12 s12 offset-l3">
                                <button type="submit" class="btn btn_submit red l6">
                                    Удалить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <h5 class="center">
                    <a href="{{url('/home')}}" class="btn-large blue">
                        Вернуться на главную
                    </a>
                </h5>
            </div>


        </div>
    </div>

    @include("components.float")

@endsection