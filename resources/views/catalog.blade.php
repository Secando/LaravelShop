@extends('app')
@section('title')
    Каталог
@endsection

@section('content')

    <div id="main" style="margin-top: -85px">
        <div id="adv_filters">
            <div id="adv_filters_head">
                <div style="font-size: 80%">Фильтры</div>
            </div>
            <div id="adv_filters_body">
                <form action="/catalog/" method="get" style="">
                <div class="adv_filter">
                    <div>Цена</div>

                        <div>от <input name="min_cost" style="width:40px" value="0">до <input name="max_cost" style="width:40px" value="99999"></div>

                </div>
                <div class="adv_filter" style="margin-top: 10px">
                    <div>Кол-во страниц</div>

                    <div>от <input name="min_pCount" style="width:40px" value="0">до <input name="max_pCount" style="width:40px" value="99999"></div>

                </div>
                <div>
                    <button id="find_btn" style="margin-left: 43px;margin-top: 10px; width: 150px">Применить</button>
                </div>
                </form>


                <a href="/catalog"><button id="find_btn" style="margin-left: 43px;margin-top: 10px; width: 150px">Сбросить все фильтры</button></a>

            </div>
        </div>
        <div id="catalog">
            <div id="catalog_nav">
                <div id="filters">
                    <div style="margin: 8px; font-size: 75%;">
                        <div>Сортировать по:</div>
                    </div>
                    <div class="filter" style="margin-left: 10px; margin-bottom: 2px">
                        <div class="filter_arrows">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -200 320 512">
                                <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 320 512">
                                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                            </svg>
                        </div>
                        <form action="/catalog/" method="get" style="">
                            <input hidden="hidden" name="rateSort" value="desc">
                        <button class="filter_button" type="submit" style="margin-top: 7px; margin-left: 3px;" >По оценкам</button>
                        </form>
                    </div>
                    <div class="filter" style="margin-left: 10px; margin-bottom: 2px">
                        <div class="filter_arrows">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -200 320 512">
                                <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 320 512">
                                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                            </svg>
                        </div>
                        <form action="/catalog/" method="get" style="">
                            <input hidden="hidden" name="priceSort" value="desc">
                            <button class="filter_button" type="submit" style="margin-top: 7px; margin-left: 3px;" >По цене</button>
                        </form>
                    </div>
                </div>
                <div id="find">

                    <form action="/catalog/" method="get" style="">
                        <input name="search" type="text" >
                        <button id="find_btn" type="submit" style="margin-top: 1px">
                            Поиск
                        </button>
                    </form>

                    <div>
                        <form action="/catalog" method="get">

                        </form>
                    </div>
                </div>
            </div>
            <div id="products">

                    <a class="product_link" href="http://localhost:8000/catalog/"
                       style="text-decoration: none; text-decoration-color: black">
                        <div class="product">
                            <div class="product_img_catalog"><img style="    min-width: 150px;min-height: 230px;max-width: 150px;max-height: 230px;" src="http://localhost:8000/assets/images/" ></div>
                            <div class="product_cost_catalog">₽</div>
                            <div class="product_name_catalog"></div>
                        </div>
                    </a>


            </div>
            <div style="align-self: end; padding:20px;margin-right: 50px; display: flex">
                <form action="/catalog/" method="get" style="">
                   <input hidden="hidden" name="page" type="text" value="prev">
                <button id="find_btn" style="margin: -5px"><</button>
                </form>

                <form action="/catalog/" method="get" style=" margin-right: 12px">
                    <input hidden="hidden" name="page" type="text" value="{">
                    <button id="find_btn" style="margin: -5px"></button>
                </form>


                <form action="/catalog/" method="get" style="">
                    <input hidden="hidden" name="page" type="text" value="next">
                    <button id="find_btn" style="margin: -5px">></button>
                </form>

            </div>
        </div>
    </div>
@endsection
