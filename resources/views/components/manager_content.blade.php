<div class='my-5 w-100'>
   <h5>{{$content_title}}</h5>
   <div>
   @forelse ($managers as $manager)
      <div class="card mb-3" style="width: 100%;">
         <div class="row no-gutters">
            <div class="col-md-4">
               <img src="{{$manager->manager_images}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
               <div class="card-body">
                  <h5 class="card-title">{{$manager->manager_name}}</h5>
                  <p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$manager->manager_description}}</p>
                  <p class="card-title my-4">Телефон: {{$manager->manager_phone}}</p>
                  <p class="card-title my-4">Особенности менеджера: {{$manager->manager_characters}}</p>
                  <p class="card-text text-right">{{$manager->manager_price}} {{$manager->val}} за {{$manager->manager_price_desc}}</p>
                  
               </div>
            </div>
         </div>
      </div>
      @empty
      <p>Сервисы отсутствуют</p>
      @endforelse
   </div>
</div>