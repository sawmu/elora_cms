@php
    $stars = DB::table('star_counts')->get();
@endphp  
  <!-- ...::: Start Counter Display Section :::... -->
  <div class="counter-display-section section-gap-tb-165 section-bg-2">
    <div class="counter-display-wrapper">
        <div class="container">
            <div class="row justify-content-center justify-content-sm-start">
                <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->

                    @foreach ($stars as $star)
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{$star->icon}}" alt="">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">{{ $star->number }}</span>+</h2>
                            <span class="text">{{ $star->text }}</span>
                        </div>
                    </div> 
                    @endforeach
                    
                    <!-- End Counterup Single Item -->
                </div>
                {{-- <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="assets/images/icon/counterup-icon-2.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">590</span>K</h2>
                            <span class="text">Project Complete</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-end col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="assets/images/icon/counterup-icon-3.png" alt="">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">28</span>+</h2>
                            <span class="text">Years of Experience</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Counter Display Section :::... -->