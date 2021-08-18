
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none logo">
        <img src="/images/logo.png" width="40px" height="40px">
      </a>


    @auth
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{route('home')}}" class="nav-link px-4 ">Главная</a></li>
        <li><a href="{{route('contact-data')}}" class="nav-link px-4 ">Все отзывы</a></li>
      </ul>
      @else
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-4 ">Главная</a></li>
        <li><a href="{{route('contact')}}" class="nav-link px-4 ">Написать отзыв</a></li>
      </ul>
    @endauth


 @auth
      <div class="col-md-3 text-end">
        <a href="{{route('profile')}}"><button type="button" class="btn btn-primary btn-purp">{{ Auth::user()->name }}</button></a>
      </div>
      @else
      <div class="col-md-3 text-end">
        <a href="{{route('login')}}"><button type="button" class="btn btn-primary btn-purp">Зайти в кабинет</button></a>
      </div>
    @endauth


    </header>

