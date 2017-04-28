<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

@yield('content')

<script src="/js/app.js"></script>
<script src="/js/materialize.min.js"></script>
<script> $(".button-collapse").sideNav();</script>
<script>
    $(document).ready(function () {
        $('.modal').modal();

        // For right show animation in inputs
        let count = 0;

        $('#create-row').on('click', () => {
            // I wanted move this elem next to ${count}, but it didn't work, only appended 1 time...
            $(`<div class="container-row">
                    <div class="input-field col s6 l6 m6">
                        <input id="other-key-${count}" type="text" name="others" value="">
                        <label for="other-key-${count}">Дополнительное поле</label>
                    </div>

                    <div class="input-field col s6 l6 m6">
                        <input id="other-value-${count}" type="text" name="others"  value="">
                        <label for="other-value-${count}">Дополнительное поле</label>
                    </div>
                </div>`).appendTo('#container');
            count++;
        });

        $('#delete-row').on('click', () => {
            let container = $('.container-row:last-of-type');

            if (count !== 0) {
                container.remove();
                count--;
            } else alert('sry container is null');
            // TODO remove this alert
        });


        //====== AJAX ======
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#form').submit(() => {
            let service = $('#service').val();
            let email = $('#email').val();
            let login = $('#login').val();
            let password = $('#password').val();
            let others = [];

            for (let int = 0; int < count; int++) {
                let key = $(`#other-key-${int}`).val();
                let value = $(`#other-value-${int}`).val();
                others.push(`${key}:${value}`);
            }
            let joinOthers = others.join('&|&');//.split('|');
            //console.log(`service = ${service || null}, email = ${email|| null}, login = ${login|| null}, password = ${password|| null}, joinOthers = ${joinOthers|| null}`);


            /*$.ajax({
             url: '{{url('/toolpass/create')}}',
             type: 'POST',
             data: {
             service : service || null,
             login   : login || null,
             email   : email || null,
             password: password || null,
             others  : joinOthers || null
             },
             success: (resp) => {
             console.log(resp.user_id)
             },
             error: (xhr, ajaxOptions, thrownError) => {
             alert(xhr.responseText)
             }
             });*/
            return false;
        });
    });
</script>

</body>
</html>
