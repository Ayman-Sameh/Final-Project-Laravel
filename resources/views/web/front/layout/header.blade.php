<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about.index')}}">About</a></li>
          <li><a href="{{route('clients.index')}}">Cients</a></li>
          <li><a href="{{route('services.index')}}">Services</a></li>
          <li><a href="{{route('testimonials.index')}}">Testimonials</a></li>
          <li><a href="{{route('portfolio.index')}}">Portfolio</a></li>
          <li><a href="{{route('team.index')}}">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="{{route('contact.index')}}">Contact</a></li>
          <li class="nav-item d-none d-sm-inline-block">
            <div class="" aria-labelledby="">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->