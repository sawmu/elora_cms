  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/"><img src="{{ asset('frontend/eloraLogo.png')}}" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          @foreach ($menuItems as $item)
            @if ($item->status == 'Enabled')
              <li class="active"><a href="{{ $item->link}}">{{ $item->name }}</a></li>   
            @endif
          @endforeach

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        @foreach ($menusocial as $social)
        <a href="{{ $social->link }}" class="{{ $social->name }}" target="black"><i class="{{ $social->image }}"></i></a>
        @endforeach
        
      </div>

    </div>
  </header><!-- End Header -->