@extends('master')

@section('title', 'AdminServices')

@section('content')
    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12" style="min-height: 100vh">
                <h1>Сервисы</h1>
                <table class="table table-striped">                    
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Код</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($servs as $serv)
                    
                    <tr>
                        <td style="vertical-align: baseline;">
                            {{$serv->id}}
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$serv->service_code}}
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$serv->service_name}}
                        </td>
                        <td style="vertical-align: baseline;">
                           {{$serv->category->cat_name}}
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('services.destroy', $serv) }}" method="POST">
                                    <a class= "btn btn-success" type="button" href="{{ route('services.show', $serv) }}">Открыть</a>
                                    <a class= "btn btn-info" type="button" href="{{ route('services.edit', $serv) }}">Редактировать</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a class= "btn btn-success mb-3" type="button" href="{{ route('services.create') }}">Создать новый сервис</a>
            </div>
        </div>
    </div>
@endsection