{{--NAVBAR--}}
<nav>
    <div class="nav-wrapper">

        {{--navbar mobile--}}
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="side-nav center-align" id="mobile-demo">
            <li><a><i class="material-icons left">person_pin</i>{{Auth::user()->name}}</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn" type="submit">выйти</button>
                </form>
            </li>
        </ul>

        {{--navbar PC--}}
        <a href="{{url('/')}}" class="brand-logo"><span class="tool">Tool</span><span class="pass">Pass</span></a>
        <ul class="right hide-on-med-and-down">
            <li><a><i class="material-icons left">person_pin</i>{{Auth::user()->name}}</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn" type="submit">выйти</button>
                </form>
            </li>
        </ul>

    </div>
</nav>