@extends('admin.app')
@section('title')
    Главная
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Заказы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div style="display: flex; flex-direction: column">
                {% for order in orders %}
                <div style="display: flex; flex-direction: row; width: 1500px;justify-content: space-between; box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.26); padding: 20px;height: auto; border-radius: 5px">
                    <div><strong>ID:</strong><br>{{ order.order.orderId }}</div>
                    <div style="min-width: 400px"><strong>Пользователь:</strong><br>{{ order.order.user.email }}</div>
                    <div style="display: flex; flex-direction: column; min-width: 400px">
                        <div style="width: 200px"><strong>Товары:</strong></div>
                        {% for product in order.product %}
                            <div>Название:<a href="/catalog/{{ product.url }}">{{ product.englishName }}</a></div>
                        {% endfor %}
                    </div>
                    <div style="min-width: 200px"><strong>Общая стоимость:</strong>{% set totalPrice = order.product|reduce((carry, item) => carry + item.cost, 0) %}<br><strong>{{ totalPrice }}₽</strong></div>
                    <form style="margin-right: 10px" action="/admin/orders/update" method="post">
                        <input hidden="hidden" name="orderId" value="{{order.order.orderId}}">
                        <select name="status">
                            <option {% if order.order.status == 1 %}selected{% endif %} value="1">В процессе</option>
                            <option {% if order.order.status == 2 %}selected{% endif %} value="2">Ожидает оплаты</option>
                            <option {% if order.order.status == 3 %}selected{% endif %} value="3">В процессе</option>
                            <option {% if order.order.status == 4 %}selected{% endif %} value="4">В доставке</option>
                            <option {% if order.order.status == 5 %}selected{% endif %} value="5">Доставлено</option>
                        </select>
                        <button style="border-color: green">Обновить Статус</button>
                    </form>
                    <form  action="/admin/orders/delete" method="post"> <input hidden="hidden" name="orderId" value="{{order.order.orderId}}"><button  style="border-color: red">Удалить</button></form>
                </div>
                {% endfor %}

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
