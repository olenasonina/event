@extends('master')

@section('title', 'Сервисы')

@section('content')

    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <section class="card_service">
        <div class="container">
            <div class="template d-flex">
                
                @include('components.sidebar', ['service_cats' => $service_cats])     
                @include('components.cat_content', ['services' => $services, 'content_title' => 'Выберете сервис:'])
                

            </div>        
        </div>    
    </section>

@endsection   