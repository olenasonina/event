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
            <div class="template d-flex">
                
                @include('components.cat_content', ['services' => $services, 'content_title' => $s_category->cat_name]) 
            </div>        
        </div>    
    </section>

@endsection  