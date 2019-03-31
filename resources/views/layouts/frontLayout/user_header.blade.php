<!--Header-part-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    @if (Route::has('login'))
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        @auth
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
                        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li> 
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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

                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                    @endif
                </div> 
            </div>
        </nav>
    </div>
</header>
  <!--close-top-serch-->