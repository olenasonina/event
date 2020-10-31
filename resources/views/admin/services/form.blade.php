@extends('master')

@isset($service_cat)
    @section('title', 'EditService')
@else
    @section('title', 'CreateService')
@endisset


@section('content')
    <div class="main" id="home">
        <div class="container h100">
            <div class="contentBox h100"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5" style="min-height: 100vh">
            @isset($service)
                <h1>Редактировать сервис: {{ $service->service_name }}</h1>
            @else
                <h1>Добавить сервис</h1>
            @endisset
                <form method="POST" enctype="multipart/form-data" class="mb-3" 
                @isset($cat)
                action="{{ route('services.update', $service) }}"
                @else
                action="{{ route('services.store') }}"
                @endisset
                >
                @isset($service) 
                @method('PUT')
                @endisset
                @csrf
                    <div class="input-group row">
                        <label for="service_code" class=col-sm-2 col-form-label>Код: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_code" id="service_code" 
                            value=" @isset($service) {{ $service->service_code }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_name" class=col-sm-2 col-form-label>Название: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_name" id="service_name" 
                            value= " @isset($service) {{ $service->service_name }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_cat_id" class=col-sm-2 col-form-label>Категория: </label>
                        <div class="col-sm-6">
                            <select name="service_cat_id" id="service_cat_id" class="form-control">
                            @foreach($cats as $cat)
                            <option value="{{ $cat->id }}"
                            @isset($service)
                                @if($service->service_cat_id == $cat->id) 
                                selected
                                @endif
                            @endisset
                            >
                            {{ $cat->cat_name }}</option>
                            @endforeach                            
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_description" class=col-sm-2 col-form-label>Описание: </label>
                        <div class="col-sm-6">
                            <textarea name="service_description" id="service_description" cols="72" rows="7" class="form-control">
                            @isset($service) {{ $service->service_description }} @endisset
                            </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_characters" class=col-sm-2 col-form-label>Характеристики: </label>
                        <div class="col-sm-6">
                            <textarea name="service_characters" id="service_characters" cols="72" rows="7"  class="form-control">
                            @isset($service) {{ $service->service_characters }} @endisset
                            </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_city" class=col-sm-2 col-form-label>Город: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_city" id="service_city" 
                            value= " @isset($service) {{ $service->service_city }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_address" class=col-sm-2 col-form-label>Адрес: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_address" id="service_address" 
                            value= " @isset($service) {{ $service->service_address }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_phone" class=col-sm-2 col-form-label>Телефон: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_phone" id="service_phone" 
                            value= " @isset($service) {{ $service->service_phone }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_price" class=col-sm-2 col-form-label>Стоимость: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_price" id="service_price" 
                            value= " @isset($service) {{ $service->service_price }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="val" class=col-sm-2 col-form-label>Валюта: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="val" id="val" 
                            value= " @isset($service) {{ $service->val }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_price_desc" class=col-sm-2 col-form-label>Единица расчета: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="service_price_desc" id="service_price_desc" 
                            value= " @isset($service) {{ $service->service_price_desc }} @endisset ">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="service_image" class=col-sm-2 col-form-label>Изображение: </label>
                        <div class="col-sm-10">
                        <label class="btn btn-secondary btn-file">Загрузить 
                            <input type="file" style="display: none" name="service_image" id="service_image">
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-success">Сохранить</button>
                </form>
            </div>
        </div>
    </div>

@endsection