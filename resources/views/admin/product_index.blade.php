@extends('admin.app')
@section('title')
    Главная
@endsection

@section('content')
    <div id="productEdit" style="position:absolute; width: 600px; height: 700px; z-index:3; background-color:lightgray;border: solid; left: 40%; top: 10%; display: none">
        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Имя манги на английском</label>
                <input type="text" class="form-control" name="english_name" id="productEditEnglishName" placeholder="Введите имя манги" value="">
                <div class="validation_err"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Имя манги на русском</label>
                <input type="text" class="form-control" name="rus_name" id="productEditRusName" placeholder="Введите имя манги" value="">
                <div class="validation_err"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Описание</label>
                <input type="text" class="form-control" name="description" id="productEditDescr" placeholder="Введите описание" value="">
                <div class="validation_err"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Цена</label>
                <input type="text" class="form-control" name="cost" id="productEditCost" placeholder="Введите имя манги" value="">
                <div class="validation_err"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Кол-во страниц</label>
                <input type="text" class="form-control" name="page_count" id="productEditPageCount" placeholder="Введите"value="">
                <div class="validation_err"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ISBN</label>
                <input type="text" class="form-control" name="isbn" id="productEditISBN" placeholder="Введите " value="">
                <div class="validation_err"></div>
            </div> <div class="form-group">
                <label for="exampleInputPassword1">Имя Автора</label>
                <input type="text" class="form-control" name="author" id="productEditAuthor" placeholder="Введите " value="">
                <div class="validation_err"></div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Загрузите обложку</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file"  name="image_path" class="custom-file-input" id="productEditImg">
                        <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Обновить</button>
        </div>
    </div>
    <div id="underEdit" style="position: absolute; width: 100%; height: 100%; z-index: 2; backdrop-filter: blur(5px); display: none"></div>
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Все товары</h1>
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
            <div id="productsList" style="display: flex; flex-direction: column">
                @foreach($products as $product)

                @endforeach
            </div>
        </section>

        <!-- /.content -->
    </div>



<script language="JavaScript" src="{{ asset('js/product.js?n=2')}}"></script>
    <style>
        .form-group {
             margin-bottom: 0rem;
        }
    </style>
@endsection
