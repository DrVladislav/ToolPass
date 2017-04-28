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

        <form id="form">
            <div class="modal-content">
                <h4>Создание сервиса</h4>

                {{ csrf_field() }}

                <div class="input-field">
                    <input id="service" type="text" class="validate" name="service" value="{{ old('service') }}">
                    <label for="service" data-error="не верно" data-success="верно"> Название сервиса</label>
                </div>

                <div class="input-field">
                    <input id="login" type="text" class="validate" name="login" value="{{ old('login') }}">
                    <label for="login" data-error="не верно" data-success="верно">Логин</label>
                </div>

                <div class="input-field">
                    <input id="email" type="text" class="validate" name="email" value="{{ old('email') }}">
                    <label for="email" data-error="не верно" data-success="верно">E-Mail адресс</label>
                </div>

                <div class="input-field">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Пароль</label>
                </div>

                {{-- This container for additional fields --}}
                <div class="row">
                    <div id="container">

                    </div>
                </div>

                <div class="center-align">
                    <a class="waves-effect waves-light btn" id="create-row">Создать дополнительное поле</a>
                    <a class="waves-effect waves-light btn red" id="delete-row">Удалить дополнительное поле</a>
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