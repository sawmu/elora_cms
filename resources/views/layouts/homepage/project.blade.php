@php
     $projects =  DB::table('projects')->get();
@endphp

<!-- ...::: Start Project Display Section :::... -->
<div class="project-display-section section-gap-tb-165">
    <div class="project-display-box">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12 d-block d-md-flex justify-content-between">
                    <!-- Start Section Content -->
                    <div class="section-content pos-relative">
                        <span class="section-tag">Awesome Portfolio</span>
                        <h2 class="section-title">My Complete Projects</h2>
                    </div>
                    <!-- End Section Content -->

                    <div class="default-nav-style mt-6 mb-6 mb-md-0 ">
                        <!-- If we need navigation buttons -->
                        <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
                        <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-display-wrapper">
            <div class="project-display-slider">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <!-- Start Project Box Single Item -->
                        @foreach ($projects as $project)
                        <div class="project-box-single-item swiper-slide">
                            <div class="img-box">
                                <div class="bg-overlay"></div>
                                <div class="bg-image">
                                    <img src="{{$project->image}}" alt="{{$project->title}}">
                                </div>
                                <div class="image">
                                    <img src="{{$project->image}}" alt="{{$project->title}}">
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{$project->link}}" target="blank">{{$project->title}}</a></h4>

                                <ul class="catagory-nav-item">
                                    <li><a href="{{$project->link}}" target="blank">{{$project->subtitle}}</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        @endforeach
                     
                        <!-- End Project Box Single Item -->
                  
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ...::: End Project Display Section :::... -->