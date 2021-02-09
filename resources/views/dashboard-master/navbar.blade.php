<!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"><img src="{{asset('assets/new-images/logo.svg')}}" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#arts">Seni Dan Budaya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#favorit">Tempat Favorit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#news">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('vismis')}}">Visi Dan Misi</a>
                </li>
            </ul>
            
            <!-- Dropdown Menu -->          
            <li class="nav-item dropdown social-icons">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="fa-stack">
                    <span class="hexagon"></span>
                    <i class="fa fa-user fa-stack-1x"></i>
                </span>
               
            </a>
            @if (Auth::guest())
             
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('home')}}"><span class="item-text">Login</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/register"><span class="item-text">Register</span></a>
                </div>
             @else
             
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <span class="item-text">Logout</span></a>
                    
                </div>
            @endif
            </li>
            <!-- end of dropdown menu -->
        </div>