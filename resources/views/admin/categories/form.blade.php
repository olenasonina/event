@extends('master')

@isset($service_cat)
    @section('title', 'EditCats')
@else
    @section('title', 'CreateCats')
@endisset


@section('content')
    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5" style="min-height: 100vh">
            @isset($cat)
                <h1>Редактировать категорию: {{ $cat->cat_name }}</h1>
            @else
                <h1>Добавить категорию</h1>
            @endisset
                <form method="POST" enctype="multipart/form-data" class="mb-3" 
                @isset($cat)
                action="{{ route('categories.update', $cat) }}"
                @else
                action="{{ route('categories.store') }}"
                @endisset
                >
                @isset($cat) 
                @method('PUT')
                @endisset
                @csrf
                    <div class="input-group row">
                        <label for="cat_code" class=col-sm-2 col-form-label>Код: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="cat_code" id="cat_code" 
                            value=" @isset($cat) {{ $cat->cat_code }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="cat_name" class=col-sm-2 col-form-label>Название: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="cat_name" id="cat_name" 
                            value= " @isset($cat) {{ $cat->cat_name }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="cat_image" class=col-sm-2 col-form-label>Изображение: </label>
                        <div class="col-sm-10">
                        <label class="btn btn-secondary btn-file">Загрузить 
                            <input type="file" style="display: none" name="cat_image" id="cat_image">
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-success">Сохранить</button>
                </form>
            </div>
        </div>
    </div>

@endsection