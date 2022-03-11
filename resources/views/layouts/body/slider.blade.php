  {{-- @php
       $sliders = DB::table('sliders')->get();
  @endphp
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        @foreach ($sliders as $key => $slider)
        
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{ asset($slider->image) }});">
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>{{ $slider->title}}</h2>
                <p>{{ $slider->description}}</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
              </div>
            </div>
          </div>
            
        @endforeach

   
       

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero --> --}}

  @php
       $sliders = DB::table('sliders')->get();
  @endphp

          <!-- ...::: Start Hero Section :::... -->
          <div class="hero-section section-dark-blue-bg">
            <div class="hero-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7">
                          @foreach ($sliders as $key => $slider)
                            <div class="hero-content">
                                <h3 class="title-big">{{ $slider->title }}</h3>
                                <h2 class="title-large">{{ $slider->subtitle }} <span class="shape-mark">{{ $slider->shape_mark }}</span></h2>
                                <p>{{ $slider->description }}</p>

                                {{-- <a href="{{ $slider->btn_link }}" class="btn btn-xl btn-outline-one icon-space-left">{{ $slider->btn_name }} <i class="icofont-download"></i></a> --}}

                                <div class="video-link">
                                    <a class="wave-btn" href="{{ $slider->youtube_link }}" data-autoplay="true" data-vbtype="video">

                                        <div class="ripple"><i class="icofont-ui-play"></i></div>
                                    </a>

                                    <span class="video-text"> {{ $slider->youtube_name }}</span>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="hero-shape hero-top-shape">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="hero-shape hero-bottom-shape">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="hero-portrait">
                    <div class="image">
                        <img class="img-fluid" src="{{ $slider->image }}" alt="hero-image">

                        <div class="image-half-round-shape"></div>
                        <div class="social-link">
                          @foreach ($menusocial as $social)
                          <a href="{{ $social->link }}" class="{{ $social->name }}" target="black"><i class="{{ $social->image }}"></i></a>
                          @endforeach
                            {{-- <a href="https://www.example.com" target="_blank"><i class="icofont-facebook"></i></a>
                            <a href="https://www.example.com" target="_blank"><i class="icofont-dribbble"></i></a>
                            <a href="https://www.example.com" target="_blank"><i class="icofont-behance"></i></a>
                            <a href="https://www.example.com" target="_blank"><i class="icofont-linkedin"></i></a> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ...::: End Hero Section :::... -->