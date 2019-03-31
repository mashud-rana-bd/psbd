<!--Header-part-->

  <!--close-top-serch-->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand py-2 px-4" href="{{ url('/') }}">Muscle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
            @if (Route::has('login'))
        <ul class="navbar-nav ml-auto">
                @auth
          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="program.html" class="nav-link">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Services
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Clipping Path</a>
              <a class="dropdown-item" href="#">Photo Retouching</a>
              <a class="dropdown-item" href="#">Image Masking</a>
              <a class="dropdown-item" href="#">Drop Shadow</a>
              <a class="dropdown-item" href="#">Image Manipulation</a>
              <a class="dropdown-item" href="#">eCommerce Service</a>
              <a class="dropdown-item" href="#">Background Remmoval</a>
              <a class="dropdown-item" href="#">Jewelry Photo Editing</a>
  
            </div>
          </li>
          <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                      </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ url('/profile')}}">Profile</a>

                     </a>
                 </li>
                </ul>
        </li>
        @else
        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="program.html" class="nav-link">About Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Services
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Clipping Path</a>
            <a class="dropdown-item" href="#">Photo Retouching</a>
            <a class="dropdown-item" href="#">Image Masking</a>
            <a class="dropdown-item" href="#">Drop Shadow</a>
            <a class="dropdown-item" href="#">Image Manipulation</a>
            <a class="dropdown-item" href="#">eCommerce Service</a>
            <a class="dropdown-item" href="#">Background Remmoval</a>
            <a class="dropdown-item" href="#">Jewelry Photo Editing</a>

          </div>
        </li>
        
        <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
          
          <li class="nav-item "><a class="nav-link color-login" href="{{ route('login') }}">Login</a></li>
          <li class="nav-item "><a class="nav-link color-login" href="{{ route('register') }}">Register</a></li>
          @endauth
        </ul>
        @endif
      </div>
      </div>
  </nav>