  <header class="sticky_header">
      <div class="main-header">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-4 col-md-2">
                      <a href="/" class="logo">
                          <img src="/assets/images/logo.png" alt="" width="150"></a>
                  </div>
                  <div class="col-8 col-md-10 d-flex justify-content-end align-items-center">
                      <nav class="menuWrap">
                          <ul class="menu">
                              <li class="active"><a href="/">Home</a></li>
                              <li><a href="{{route('about')}}">About Us</a></li>
                              <li><a href="{{route('house-all')}}">Rent</a></li>
                              {{-- <li><a href="agents.php">Agent</a></li> --}}
                              {{-- <li><a href="{{ route('register') }}">Become a Member</a></li> --}}
                              {{-- <li><a href="{{route('atv-rental')}}">ATV’s rentals</a></li> --}}
                              <li><a href="{{route('contact')}}">Contact Us</a></li>
                          </ul>

                          {{-- <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                              <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('house.all') }}">All Available Houses</a>
                            </li>
                    
                    
                            @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @else
                            @if (Auth::user()->role_id == 2)
                            <li class="nav-item"><a class="nav-link" href="{{ route('landlord.dashboard') }}">Dashboard</a></li>
                            @endif
                            @if (Auth::user()->role_id == 3)
                            <li class="nav-item"><a class="nav-link" href="{{ route('renter.dashboard') }}">Dashboard</a></li>
                            @endif
                            @if (Auth::user()->role_id == 1)
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            @endguest
                          </ul> --}}
                      </nav>
                      <div class="hdr_r">
                          {{-- <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                          <a class="nav-link" href="{{ route('register') }}">Signup</a> --}}

                          <ul class="navbar-nav mr-auto">                 
                            @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">Become a Member</a></li>
                            @else
                            @if (Auth::user()->role_id == 2)
                            <li class="nav-item"><a class="nav-link" href="{{ route('landlord.dashboard') }}">Dashboard</a></li>
                            @endif
                            @if (Auth::user()->role_id == 3)
                            <li class="nav-item"><a class="nav-link" href="{{ route('renter.dashboard') }}">Dashboard</a></li>
                            @endif
                            @if (Auth::user()->role_id == 1)
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            @endguest
                          </ul>
                      </div>
                      <div class="menu-Bar">
                          <div>
                              <span aria-label="menu bar line 1"></span>
                              <span aria-label="menu bar line 2"></span>
                              <span aria-label="menu bar line 3"></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>