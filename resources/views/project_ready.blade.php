@extends('master')

@section('title', 'My')

@section('content')

<div class="main" id="home">
    <div class="container h100">
        <div class="contentBox h100"></div>
    </div>
</div>
<div class="container" style="height: 100vh">
    Тут будет ToDo лист со всеми сервисами, для того, чтобы добавлять задачи по каждому из них, а также живочат с менеджером.
    <br>
    <form action="{{ route('index') }}" method="POST">
        <button type="submit" class="btn btn-danger">На главную</button>
        @csrf
    </form>
</div>




@endsection  