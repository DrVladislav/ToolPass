{{-- FLOAT BTN --}}
<div class="container">
    <div class="row">
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light blue right fixed" href="#create"><i
                        class="material-icons">add</i></a>
        </div>
    </div>
</div>

{{-- Modal Structure for float btn --}}
<div class="container">
    <div id="create" class="modal modal-fixed-footer">

        <form method="POST" action="{{url('/toolpass/create')}}">
            <div class="modal-content">
                <h4>Создание сервиса</h4>

                {{ csrf_field() }}

                <div class="input-field">
                    <input id="service" type="text" class="validate service" name="service">
                    <label for="service" data-error="не верно" data-success="верно">Название сервиса</label>
                </div>

                @if($errors->has('service'))
                    <p class="center-align red-text">{{$errors->first('service')}}</p>
                @endif

                <div class="input-field">
                    <input id="login" type="text" class="validate login" name="login">
                    <label for="login" data-error="не верно" data-success="верно">Логин</label>
                </div>

                <div class="input-field">
                    <input id="email" type="text" class="validate email" name="email">
                    <label for="email" data-error="не верно" data-success="верно">E-Mail адресс</label>
                </div>

                <div class="input-field">
                    <input id="password" type="password" class="validate password" name="password">
                    <label for="password">Пароль</label>
                </div>

                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <textarea id="area" class="materialize-textarea" name="others"></textarea>
                        <label for="area">Заметки</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn">
                    Создать сервис
                </button>
            </div>
        </form>

    </div>
</div>