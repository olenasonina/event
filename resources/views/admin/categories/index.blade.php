@extends('master')

@section('title', 'AdminCats')

@section('content')
    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12" style="min-height: 100vh">
                <h1>Категории</h1>
                <table class="table table-striped">                    
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Код</th>
                            <th>Название</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cats as $cat)
                    
                    <tr>
                        <td style="vertical-align: baseline;">
                                {{$cat->id}}
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$cat->cat_code}}
                        </td>
                        <td style="vertical-align: baseline;">
                            {{$cat->cat_name}}
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('categories.destroy', $cat) }}" method="POST">
                                    <a class= "btn btn-success" type="button" href="{{ route('categories.show', $cat) }}">Открыть</a>
                                    <a class= "btn btn-info" type="button" href="{{ route('categories.edit', $cat) }}">Редактировать</a>
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
                <a class= "btn btn-success mb-3" type="button" href="{{ route('categories.create') }}">Создать новую категорию</a>
            </div>
        </div>
    </div>
@endsection