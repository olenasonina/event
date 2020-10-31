@extends('master')

@section('title', 'ShowService')

@section('content')
    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5" style="min-height: 100vh">
                <h1>Сервис: {{ $service->service_name }}</h1>
                
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
                            <td>{{ $service->id }}</td>
                        </tr>
                        <tr>
                            <td>Код</td>
                            <td>{{ $service->service_code }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $service->service_name }}</td>
                        </tr>
                        <tr>
                            <td>Категория</td>
                            <td>{{$service->category->cat_name}}</td>
                        </tr>
                        <tr>
                            <td>Описание</td>
                            <td>{{$service->service_description}}</td>
                        </tr>
                        <tr>
                            <td>Характеристики</td>
                            <td>{{$service->service_characters}}</td>
                        </tr>
                        <tr>
                            <td>Город</td>
                            <td>{{$service->service_city}}</td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td>{{$service->service_address}}</td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>{{$service->service_phone}}</td>
                        </tr>
                        <tr>
                            <td>Стоимость</td>
                            <td>{{$service->service_price}}</td>
                        </tr>
                        <tr>
                            <td>Валюта</td>
                            <td>{{$service->val}}</td>
                        </tr>
                        <tr>
                            <td>Единица расчета</td>
                            <td>{{$service->service_price_desc}}</td>
                        </tr>
                        <tr>
                            <td>Изображение</td>
                            <td><img src="" height='240px' alt=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection