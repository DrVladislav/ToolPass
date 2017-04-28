@extends("layouts.template")

@section("title")
    404
@endsection

@section("content")
    <h2 class="center-align">Извините, но у вас такого сервиса нету!</h2>

    <div class="container">
        <div class="row center">
            <h5>
                <a href="{{url('/home')}}" class="btn-large">
                    Вернуться
                </a>
            </h5>
        </div>
    </div>
@endsection
