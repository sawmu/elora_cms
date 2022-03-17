@extends('layouts.master_portfolio')
 
@section('portfolio')

@php
     $projects =  DB::table('projects')->get();
@endphp

      <!-- ...::: Start Breadcrumb Section :::... -->
      <div class="breadcrumb-section section-bg overflow-hidden pos-relative">
        <div class="breadcrumb-shape-top-left"></div>
        <div class="breadcrumb-shape-bottom-right"></div>
        <div class="breadcrumb-box">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Portfolio</h2>
                            <ul class="breadcrumb-link">
                                <li><a href="/">Home</a></li>
                                <li class="active" aria-current="page">Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->
    <!-- .....:::::: Start Project Section :::::.... -->
    <div class="project-section section-gap-tb-165">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="projects-gallery-filter-nav">
                        <button class="btn btn-outline-secondary active" data-filter="*">All</button>
                        <button class="btn btn-outline-secondary" data-filter=".html">HTML</button>
                        <button class="btn btn-outline-secondary" data-filter=".wordpress">Wordpress</button>
                        <button class="btn btn-outline-secondary" data-filter=".shopify">Shopify</button>
                        <button class="btn btn-outline-secondary" data-filter=".seo">SEO</button>
                    </div>

                </div>
            </div> --}}
            <div class="row">
                <div class="col-12">
                    <div class="projects-wrapper-gallery-content">
                        <div class="row">
                            @foreach ($projects as $project)
                            <div class="col-md-6 filter-item html">
                                <!-- Start Project Box Single Item -->
                                <div class="project-box-single-item">
                                    <a href="{{ $project->link }}" target="blank">
                                        <div class="img-box">
                                            <div class="bg-overlay"></div>
                                            <div class="bg-image">
                                                <img src="{{ $project->image }}" alt="">
                                            </div>
                                            <div class="image">
                                                <img src="{{ $project->image }}" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="{{ $project->link }}">{{ $project->title }}</a></h4>

                                            <ul class="catagory-nav-item">
                                                <li><a href="{{ $project->link }}">{{ $project->subtitle }}</a></li>
                                                
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Project Box Single Item -->
                            </div>
                                
                            @endforeach
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- .....:::::: End Project Section :::::.... -->







@endsection