@extends('app')
@section('title')
    Вход
@endsection

@section('content')
    <div id="main">
        <div id="catalog" style="width: 1000px;align-items: center; background-color: #F3F3F3;">
            <div id="products" style=" width:400px;display: flex; flex-direction: column; align-items: center; padding: 50px 0px 100px 10px;box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.26); border-radius: 10px; background-color: white">
                <div style="margin-bottom: 10px">Вход</div>
                <form action="/login" method="post" style="margin-left: 0px">
                    <div>Электронная почта</div>
                    <input class="reg_form"  name="email" type="email">
                    <div>Пароль</div>
                    <input class="reg_form"  name="password" type="password">
                    <div class="validation_err"></div>
                    <button id="find_btn" style="font-size: 100%;height: 33px; margin-left: 30px;margin-top: 10px">Войти</button><br>
                    <a href="http://localhost:8000/register" style="font-size: 70%; margin-left: 30px">Зарегестрироваться</a>
                </form>
            </div>
        </div>
    </div>
@endsection
