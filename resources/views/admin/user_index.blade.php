@extends('admin.app')
@section('title')
    Главная
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
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
                {% for user in users %}
                <div style="display: flex; flex-direction: row; width: 800px;justify-content: space-between; box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.26); padding: 20px;height: 120px; border-radius: 5px">
                    <img src="http://localhost:8000/assets/images/" width="60px">
                    <div>id:{{ user.id }}</div>
                    <div>Почта:{{ user.email }}</div>
                    <div style="width: 200px">{{ user.name }}</div>
                    <div style="width: 200px">Дата регистрации: {{ user.createdAt }}</div>
                </div>
                {% endfor %}
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
