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
                        <h1 class="m-0">Создать товар</h1>
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

            <form method="post" action="/admin/products/create" style="width: 500px" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя манги на английском</label>
                        <input type="text" class="form-control" name="english_name" id="exampleInputEmail1" placeholder="Введите имя манги" value="">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя манги на русском</label>
                        <input type="text" class="form-control" name="rus_name" id="exampleInputEmail1" placeholder="Введите имя манги" value="">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Введите описание" value="">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена</label>
                        <input type="text" class="form-control" name="cost" id="exampleInputEmail1" placeholder="Введите имя манги" value="">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Кол-во страниц</label>
                        <input type="text" class="form-control" name="page_count" id="exampleInputPassword1" placeholder="Введите"value="">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="exampleInputPassword1" placeholder="Введите " value="">
                        <div class="validation_err"></div>
                    </div> <div class="form-group">
                        <label for="exampleInputPassword1">Имя Автора</label>
                        <input type="text" class="form-control" name="author" id="exampleInputPassword1" placeholder="Введите " value="">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Загрузите обложку</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file"  name="image_path" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Хз</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Загрузить</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
