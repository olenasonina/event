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
            <div class="template">
                <div class="panel">
                    <a href="{{ route('show_service_category', ['service_category' => 'cafes']) }}">
                        <img src="assets/images/swiper/cafe.jpg" alt="">
                        <h2>Кафе</h2>
                    </a>
                    <p>Раздел с кафе</p>
                </div>
                <div class="panel">
                    <a href="{{ route('show_service_category', ['service_category' => 'restaurants']) }}">
                        <img src="assets/images/swiper/restrant.jpg" alt="">
                        <h2>Рестораны</h2>
                    </a>
                    <p>Раздел с ресторанами</p>
                </div>
                <div class="panel">
                    <a href="{{ route('show_service_category', ['service_category' => 'hosts']) }}">
                        <img src="assets/images/swiper/tamada.jpg" alt="">
                        <h2>Ведущие</h2>
                    </a>
                    <p>Раздел с ведущими</p>
                </div>
            </div>        
        </div>    
    </section>

@endsection   