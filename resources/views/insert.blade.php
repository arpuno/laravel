@extends('layouts.app')
@section('content')
        <div class="container">
        <input type="text" name="name" id="name" placeholder="Имя Пользователя" class="form-control"/><br>
        <input type="text" name="login" id="login" placeholder="Логин" class="form-control"/><br>
        <input type="text" name="password" id="password" placeholder="Пароль" class="form-control"/><br>
        <input type="text" name="password_repeat" id="password_repeat" placeholder="Повторите пароль" class="form-control"/><br>
        <input type="hidden" name="_token" id='_token' value="{{ csrf_token() }}">
        <button class="btn btn-lg btn-alert" id='sub'> Добавить в БД</button>
        </div>
          <script>
        $.ajaxSetup({
            headers: {
                 //Всё, что связано с токеном - магические строчки и лучше к этому не прикасаться.
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         </script>
             <script>
            $(document).ready(function() {
                $('#sub').click(function() {
                    var name = $('#name').val();
                    var login = $('#login').val();
                    var password = $('#password').val();
                    var password_repeat = $('#password_repeat').val();
                    var _token = $('#_token').val();
                    if (password != password_repeat)
                    {
                        var string = "<center><h4>Введённые вами пароли не совпадают. Попробуйте ещё раз.</h4></center><script>$('h4');";
                        $('body').append(string);
                    }
                    else if( (name !='') && (login != '') )
                    {
                        $.post(
                                "/dbinsert", {"name":name,
                                            "login":login,
                                            "password": password,
                                            "_token":_token}
                        )
                        .done(function (msg) {
                                    var string = "<center><h4>Данные успешно загружены</h4></center><script>$('h4');";
                                    $('body').append(string);
                                    $('#name').val('');
                                    $('#login').val('');
                                    $('#password').val('');
                                    $('#password_repeat').val('');
                        console.log(msg);
                    })
                                .fail(function(msg) {
                        var string = "<center><h4>Ошибка добавления. Проверьте правильность ввода данных.</h4></center><script>$('h4')";
                        $('body').append(string);
                    })
                    }
                });


            })
    </script>
@endsection
