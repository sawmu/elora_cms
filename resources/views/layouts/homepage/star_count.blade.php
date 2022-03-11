@php
    $stars = DB::table('star_counts')->first();
@endphp  
  <!-- ...::: Start Counter Display Section :::... -->
  <div class="counter-display-section section-gap-tb-165 section-bg-2">
    <div class="counter-display-wrapper">
        <div class="container">
            <div class="row justify-content-center justify-content-sm-start">
                <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->

                   
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{$stars->icon1}}" alt="image">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">{{ $stars->number1 }}</span>+</h2>
                            <span class="text">{{ $stars->text1 }}</span>
                        </div>
                    </div> 
                   
                    
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{$stars->icon2}}" alt="image">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">{{ $stars->number2 }}</span></h2>
                            <span class="text">{{ $stars->text2 }}</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-end col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{$stars->icon3}}" alt="image">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">{{$stars->number3}}</span>+</h2>
                            <span class="text">{{ $stars->text3 }}</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Counter Display Section :::... -->