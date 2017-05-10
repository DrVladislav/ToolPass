@extends('layouts.template')

@section('title')
    ToolPass
@endsection

@section('content')

    @include('components.navbar')

    <div class="container">
        <div class="row">
            @if(!$services->isEmpty())
                @foreach($services as $service)
                    <div class="col s12 m12 l3">
                        <a href="/service/{{$service->id}}" class="card-hover">
                            <div class="card-panel hoverable center-align">
                                <span class="card-title center">{{$service->service}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h3 class="center" style="margin-top: 200px;">У вас пока нету сохраненных паролей :(
                    <br>
                    Нажмите на "+" снизу справа чтобы сохранить пароль от сервиса :)
                </h3>
            @endif
        </div>
    </div>

    @include("components.float")
@endsection
