<div id="div_nav">
    <div id="nav_left">
        <div id="logo">
            <p>FushiManga</p>
        </div>
        <a href="/catalog" style="text-decoration: none;">
            <div id="nav_catalog">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" style="margin-left: 10px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                <div style="margin-left: 5px">Каталог</div>
            </div>
        </a>
    </div>
    <div id="navigations">

{{--        {% if(user) %}--}}
{{--        <a href="/profile" style="text-decoration: none; color: black;">--}}
{{--            <div class="nav_elem">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 20px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>--}}
{{--                <div>Кабинет</div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        {% else %}--}}
        <a href="/login" style="text-decoration: none; color: black;">
            <div class="nav_elem">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 20px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <div>Войти</div>
            </div>
        </a>
{{--        {% endif %}--}}
        <a href="/orders" style="text-decoration: none; color: black; ">
            <div class="nav_elem">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 20px "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z"/></svg>
                <div>Заказы</div>
            </div>
        </a>

        <a href="/favorite" style="text-decoration: none; color: black; ">
            <div class="nav_elem" >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 23px "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                <div>Избранное</div>
            </div>
        </a>
        <a href="/cart" style="text-decoration: none; color: black;">
            <div class="nav_elem">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 25px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path  d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                <div>Корзина</div>
            </div>
        </a>

    </div>
</div>
