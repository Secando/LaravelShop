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
                        <h1 class="m-0">Обновить товар</h1>
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
            <form method="post" action="/admin/products/edit/{{ $product->id }}" style="width: 500px" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя манги на английском</label>
                        <input type="text" class="form-control" name="english_name" id="exampleInputEmail1" placeholder="Введите имя манги" value="{{ $product->english_name }}">
                        <div class="validation_err"></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя манги на русском</label>
                        <input type="text" class="form-control" name="rus_name" id="exampleInputEmail1" placeholder="Введите имя манги" value="{{ $product->rus_name }}">
                        <div class="validation_err"></div>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Описание</label>
                        <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Описание" value="{{ $product->description}}">
                        <div class="validation_err"></div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена</label>
                        <input type="text" class="form-control" name="cost" id="exampleInputEmail1" placeholder="Введите имя манги" value="{{ $product->cost }}">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Кол-во страниц</label>
                        <input type="text" class="form-control" name="page_count" id="exampleInputPassword1" placeholder="Введите кол-во страниц"value="{{ $product->page_count }}">
                        <div class="validation_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="exampleInputPassword1" placeholder="Введите ISBN" value="{{ $product->isbn }}">
                        <div class="validation_err"></div>
                    </div> <div class="form-group">
                        <label for="exampleInputPassword1">Имя Автора</label>
                        <input type="text" class="form-control" name="author" id="exampleInputPassword1" placeholder="Введите имя автора " value="{{ $product->author }}">
                        <div class="validation_err"</div>
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

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить!</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
