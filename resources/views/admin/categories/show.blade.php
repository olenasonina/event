@extends('master')

@section('title', 'ShowCat')

@section('content')
    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5" style="min-height: 100vh">
                <h1>Категория: {{ $cat->cat_name }}</h1>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Поле</th>
                            <th>Значение</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td>{{ $cat->id }}</td>
                        </tr>
                        <tr>
                            <td>Код</td>
                            <td>{{ $cat->cat_code }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $cat->cat_name }}</td>
                        </tr>
                        <tr>
                            <td>Изображение</td>
                            <td><img src="" height='240px' alt=""></td>
                        </tr>
                        <tr>
                            <td>Количество сервисов</td>
                            <td>{{ $cat->services->count() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection