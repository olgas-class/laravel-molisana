<header>
  <div class="text-center">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo Molisana">
  </div>
  <ul class="d-flex justify-content-center gap-3">
    <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
    <li class="{{ Request::route()->getName() === 'products' ? 'active' : '' }}"><a
        href="{{ route('products') }}">Prodotti</a></li>
    <li class="{{ Request::route()->getName() === 'news' ? 'active' : '' }}"><a href="{{ route('news') }}">News</a></li>
  </ul>
</header>
