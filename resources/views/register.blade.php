@extends('app')
@section('title')
    Регистрация
@endsection

@section('content')
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LePJgkqAAAAAAHorciNTzVhVEeux4iyq4OZ6jk2"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
    <div id="main">
        <div id="catalog" style="width: 1000px;align-items: center; background-color: #F3F3F3;">
            <div id="products" style=" width:400px;display: flex; flex-direction: column; align-items: center; padding: 50px 0px 100px 10px;box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.26); border-radius: 10px;background-color: white">
                <div>Регистрация</div>
                <form id="demo-form" method="post" action="/register" style="margin-left: 0px">
                    <div>Имя</div>
                    <input class="reg_form" name="name" value="" type="text">
                    <div class="validation_err"></div>
                    <div>Почта</div>
                    <input class="reg_form"  name="email" value="" type="text">
                    <div class="validation_err"></div>
                    <div>Пароль</div>
                    <input class="reg_form" name="password" type="password">
                    <div class="validation_err"></div>
                    <div>Подтвердите пароль</div>
                    <input class="reg_form" name="password_confirm" type="password">
                    <button class='g-recaptcha' id="find_btn" style="font-size: 100%;height: 33px; margin-left: 30px;margin-top: 10px"
                            data-sitekey="6LePJgkqAAAAAAHorciNTzVhVEeux4iyq4OZ6jk2"
                            data-callback='onSubmit'
                            data-action='submit' >Зарегестрироваться</button><br>
                    <a href="http://localhost:8000/login" style="font-size: 70%; margin-left: 30px">Уже зарегестрированы?</a>
                </form>
            </div>
        </div>
    </div>
@endsection
