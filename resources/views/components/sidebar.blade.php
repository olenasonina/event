<div class='col-md-4 my-5'>
    <h5>Доступные категории:</h5>
    
    @forelse ($service_cats as $cat)
    <a class="nav-link my-categorylink" href="{{ route('show_service_category', $cat->cat_code) }}">{{$cat->cat_name}}</a>
    @empty
    <p>Нет доступных категорий</p>
    @endforelse

</div>