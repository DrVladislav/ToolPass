@extends('layouts.template')

@section('title')
    ToolPass
@endsection

@section('content')

    @include('components.navbar')

    {{--SERVICES--}}
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="col s12 m12 l3">
                    <a href="/service/{{$service->id}}" class="card-hover">
                        <div class="card-panel hoverable center-align">
                            <span class="card-title center">{{$service->service}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    @include("components.float")
@endsection
