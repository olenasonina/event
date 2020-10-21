@extends('master')

@section('title', $s_category)

@section('content')

    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <section class="card_service">
        <div class="container">
            <div class="template">
                <h1>My category</h1>
                <h2>{{ $s_category }}</h2>
                <!-- <p>
                    Цена: <b>1000 грн</b>
                </p>
                <img src="#" alt="My first card"> -->
                <p>Cool my first category</p>
                <!-- <a class="btn btnD2" href="#">Добавить в Event</a> -->
            </div>        
        </div>    
    </section>

@endsection  