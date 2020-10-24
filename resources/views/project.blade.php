@extends('master')

@section('title', 'New')

@section('content')

<div class="main" id="home">
    <div class="container h100">
        <div class="contentBox h100"></div>
    </div>
</div>
<div class="project mb-5">
    <div class="container">
        <div class="panel">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Название сервиса</th>
                        <th>Категория</th>
                        <th>Город</th>
                        <th>Контактный телефон</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($event->services as $service)
                    <tr>
                        <td>
                            <a href="">
                                <img src="{{ $service->service_images }}" alt="" style="max-height: 150px"> Name
                            </a>
                        </td>
                        <td>
                            <a href="">
                            {{$service->category->cat_name}}
                            </a>
                        </td>
                        <td>
                            {{$service->service_city}}
                        </td>
                        <td>
                            {{$service->service_phone}}
                        </td>
                        <td>
                            {{$service->service_price}} {{$service->val}} за {{$service->service_price_desc}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <br>
            <div class="btn-group float-right" role="group">
                <a type="button" class="btn btn-success" href="">Создать EVENT</a>
            </div>
        </div>
    </div>
</div>
@endsection  