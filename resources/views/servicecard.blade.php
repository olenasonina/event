@extends('master')

@section('title', $service->service_name)

@section('content')

<div class="main" id="home">
    <div class="container h100">
        <div class="contentBox h100"></div>
    </div>
</div>
<div class="col-lg-8 mx-auto mt-3 mb-5">
    <div class="d-flex justify-content-between my-3">
        <div class="card mr-2" style="min-width:45%; max-height: 100vh">
            <img src="{{$service->service_images}}" style="object-fit: cover" class="card-img h-100" alt="...">
        </div>
        <div class="card ml-2" style="min-width:45%">
            <div class="card-body">
                <h5 class="card-title mb-4">{{ $service->service_name }}</h5>
                <h6 class="card-title my-4">Категория: {{$service->category->cat_name}}</h6>
                <h6 class="card-title my-4">{{$service->service_description}}</h6>
                <h6 class="card-title my-4">Город: {{$service->service_city}}</h6>
                <h6 class="card-title my-4">Адрес: {{$service->service_address}}</h6>
                <h6 class="card-title my-4">Контактный телефон: {{$service->service_phone}}</h6>
                <h6 class="card-title my-4">Особенные характеристики: {{$service->service_characters}}</h6>
                <h6 class="card-title my-4">Стоимость: {{$service->service_price}} {{$service->service_val}} за {{$service->service_price_desc}}</h6>
                <a href="#" class="btn btn-secondary">Добавить в EVENT</a>
                <!-- @if(Auth::id()==1)
                
                <form action="{{ route('changeStatus', $item->id)}}" method="GET" class="py-4">
                    @csrf
                    <label for="status">Изменение статуса сообщения:</label>
                    <select class="my-3" name="status" id="status">
                        <option value="">Choose...</option>
                        @forelse ($statuses as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                        @empty
                        <p>Статусы отсутствуют</p>
                        @endforelse
                    </select>
                    <button type="submit" class="btn btn-primary">Изменить статус сообщения</button>
                </form>
                @endif -->
            </div>
        </div>
    </div>
    
</div>

@endsection   