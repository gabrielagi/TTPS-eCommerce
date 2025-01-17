<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container py-4">
        <a class="navbar-brand" href="{{ url('/') }}">
           <h2 class="font1">Köffi</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              
            </ul>
            <ul class="navbar-nav m-auto search-box">
              <!-- Search form -->
              <input class="form-control search-box-border" type="text" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                    <span class="input-group-text cyan lighten-2 glass" id="basic-text1"><i class="fas fa-search text-white"
                        aria-hidden="true"></i></span>
                  </div>
            </ul>

            <!-- Cart icon -->
            <ul class="navbar-nav ml-auto">
                <div class="text-right">
                    <a href="/welcome" class="font2"><i class="fas fa-shopping-cart shopping-cart mr-2"></i>Carrito</a>
                </div>
            </ul>
                
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link font2" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link font2" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>