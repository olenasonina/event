<div class='my-5 w-100'>
   <h5>{{$content_title}}</h5>
   <div>
   @forelse ($services as $service)
      <div class="card mb-3" style="width: 100%;">
         <div class="row no-gutters">
            <div class="col-md-4">
               <img src="{{$service->service_images}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
               <div class="card-body">
                  <h5 class="card-title">{{$service->service_name}}</h5>
                  <p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$service->service_description}}</p>
                  <p class="card-title my-4">Город: {{$service->service_city}}</p>
                  <p class="card-title my-4">Адрес: {{$service->service_address}}</p>
                  <p class="card-text text-right">{{$service->service_price}} {{$service->service_val}} за {{$service->service_price_desc}}</p>
                  <p class="card-text"><small class="text-muted">{{$service->updated_at}}</small></p>
                  <a href="{{ route('show_one_service', ['service_category' => $service->category->cat_code, 'service' => $service->service_code]) }}" class="btn btn-secondary">Детальнее</a>
               </div>
            </div>
         </div>
      </div>
      @empty
      <p>Сервисы отсутствуют</p>
      @endforelse
   </div>
</div>