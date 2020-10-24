<div class='col-md-4 my-5'>
    <h5>Доступные категории:</h5>
    
    @forelse ($service_cats as $cat)
    <a class="nav-link my-categorylink" href="{{ route('show_service_category', $cat->cat_code) }}">{{$cat->cat_name}}</a>
    @empty
    <p>Нет доступных категорий</p>
    @endforelse

    <!-- @if(Auth::id()==1)
    <h5 class="mt-5">Категории для модерации:</h5>
    @forelse ($params as $key => $param)
    <a class="nav-link my-categorylink" href="{{ route('showMod', $key) }}">{{$param}}</a>
    @empty
    <p>Категории для модерации отсутствуют</p>
    @endforelse
    @endif -->
<!-- 
    @if(Auth::check())
    <h5 class="mt-5">Профиль:</h5>
    <a class="nav-link my-categorylink" href="{{ route('myAdv', Auth::id()) }}">Мои объявления</a>
    @endif -->

</div>