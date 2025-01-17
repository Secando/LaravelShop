@extends('app')
@section('title')
Главная
@endsection

@section('content')
<div id="main">
    <div id="home_head" style="margin-top: 20px">
        <div style="font-size: 260%; margin-top: 50px; margin-bottom: 60px">Манга на японском языке</div>
        <div id="home_head_elem1" style="display: flex;margin-top: 10px">
            <img src="{{asset('images/shutterstock-413397052.webp')}}"
                 style="width: 400px;height: 400px;object-fit: cover;object-position: 0 0; filter: blur(1px);">
            <div style="font-size: 130%; margin: 16px; width: 600px"><strong>FushiManga</strong> — интернет-магазин где
                есть ориганальная манга из Японии!<br> У нас вы найдете обширную коллекцию манги на любой вкус: <br>от
                известнейших сёненов, заканчивая свежими новинками из Японии.
            </div>
        </div>
        <div id="home_head_elem2" style="display: flex ;margin-top: 10px">
            <div style="font-size: 130%; margin: 16px; width: 600px"> В FushiManga мы гордимся тем, что предлагаем вам
                только оригинальную японскую мангу.<br> Мы понимаем, насколько важно для вас получать качественные и
                подлинные произведения, поэтому уделяем особое внимание выбору наших поставщиков.
            </div>
            <img src="{{asset('images/s-l1200.jpg')}}"
                 style="width: 400px;height: 400px;object-fit: cover;object-position: 0 0; filter: blur(1px);">
        </div>
        <div id="home_head_elem3" style="display: flex; flex-direction: column; align-items: center; margin-top: 10px">
            <div style="font-size: 130%; width: 600px;margin-left: 100px;margin-bottom: 10px;margin-top: 10px"> Быстрая
                доставка по всей России
            </div>
            <a href="/catalog">
                <button id="find_btn" style="width: 400px; height: 50px; font-size: 130%">Перейти в каталог</button>
            </a>

        </div>

    </div>
</div>
@endsection
