@extends('master')

@section('title', 'Менеджеры')

@section('content')

    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <section class="card_service">
        <div class="container">

        @include('components.manager_content', ['managers' => $managers, 'content_title' => 'Выберете менеджера:'])

        </div>    
    </section>

@endsection   