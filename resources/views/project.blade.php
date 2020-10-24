@extends('master')

@section('title', 'New')

@section('content')

<div class="main" id="home">
    <div class="container h100">
        <div class="contentBox h100"></div>
    </div>
</div>
<div class="project mb-5">
    <div class="container" style="min-height: 100vh">
        <div class="panel">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Название сервиса</th>
                        <th>Категория</th>
                        <th>Город</th>
                        <th>Контактный телефон</th>
                        <th>Стоимость</th>
                        <th>Возможности</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($event->services as $service)
                    <tr>
                        <td style="vertical-align: baseline;">
                            <a href="{{ route('show_one_service', ['service_category' => $service->category->cat_code, 'service' => $service->service_code]) }}">
                                <img src="{{ $service->service_images }}" alt="" style="max-height: 150px"> {{$service->service_name}}
                            </a>
                        </td>
                        <td style="vertical-align: baseline;">
                            <a href="{{ route('show_service_category', ['service_category' =>  $service->category->cat_code]) }}">
                            {{$service->category->cat_name}}
                            </a>
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$service->service_city}}
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$service->service_phone}}
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$service->service_price}} {{$service->val}} за {{$service->service_price_desc}}
                        </td>
                        <td>
                            <form action="{{ route('project_remove', $service) }}" method="POST">
                                <button type="submit" class="btn btn-danger">Удалить</button>
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <br>
            <div class="btn-group float-right" role="group">
                <a type="button" class="btn btn-success" href="{{ route('show_one_project', session('eventId')) }}">Создать EVENT</a>
            </div>
        </div>
    </div>
</div>
@endsection  