@extends('layouts.master_about')
 
@section('about')

      <!-- ...::: Start Breadcrumb Section :::... -->
      <div class="breadcrumb-section section-bg overflow-hidden pos-relative">
        <div class="breadcrumb-shape-top-left"></div>
        <div class="breadcrumb-shape-bottom-right"></div>
        <div class="breadcrumb-box">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">About Me</h2>
                            <ul class="breadcrumb-link">
                                <li><a href="/">Home</a></li>
                                <li class="active" aria-current="page">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...::: Start Vider Info Display Section :::... -->
    <div class="video-info-display-section section-gap-tb-165">
        <div class="video-info-display-box">
            <div class="container">
                <div class="video-info-display-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-8 col-10 offset-1 offset-sm-2 offset-md-3 offset-lg-0">
                            <div class="video-card">
                                <a class="wave-btn" href="https://www.youtube.com/watch?v=QHGoYchjG_Q" target="blank" data-autoplay="true" data-vbtype="video">
                                    <div class="ripple"><i class="icofont-ui-play"></i></div>
                                </a>

                                <a href="https://drive.google.com/file/d/1OF3boT8M_wUyf8DoUR0ZI0P9uIwmfW9c/view?usp=sharing" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i class="icofont-download"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-8 offset-md-2 offset-lg-0 offset-xl-1">
                            <div class="video-info-content">
                                <h2 class="title">I’m Mu Ka Hbaw</h2>

                                <h3 class="sub-title">
                                    Web Developer specializing in
                                Frontend.
                                </h3>

                                <p>Experienced web developer and UI UX designer, specialized in creating beautiful, yet functional websites and digital interfaces. I love helping clients achieve their goals and grow their brands. I’m a very passionate designer that’s always wanting to grow, learn and try something new. I have years of industry experience and I have worked with many exceptional companies and clients during those years</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Vider Info Display Section :::... -->

    <!-- ...::: Start Resume Info Display Section :::... -->
    <div class="resume-info-display-section  section-gap-tb-165 section-bg">
        <div class="resume-info-display-box">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="resume-tab nav">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#education-tab">Education</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#experience-tab">Experience</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="resume-info-display-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="education-tab" role="tabpanel">
                                    <ul class="resume-list">
                                        <!-- Start Resume Tab List Single Item -->
                                        <li class="resume-tab-list-single-item">
                                            <div class="content">
                                                <div class="left">
                                                    <span class="year">2015 - 2017</span>
                                                </div>
                                                <div class="right">
                                                    <h3 class="title">Diploma in Japaneses Language </h3>
                                                    <span class="institute-name">Japan Tokyo International School, Tokyo</span>
                                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p> --}}
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Resume Tab List Single Item -->
                                        <!-- Start Resume Tab List Single Item -->
                                        <li class="resume-tab-list-single-item">
                                            <div class="content">
                                                <div class="left">
                                                    <span class="year">2012 - 2014</span>
                                                </div>
                                                <div class="right">
                                                    <h3 class="title">HNC in Application Development </h3>
                                                    <span class="institute-name">Pearson BTEC, Lithan University (Yangon, Myanmar)</span>
                                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p> --}}
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Resume Tab List Single Item -->
                                     
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="experience-tab" role="tabpanel">
                                    <ul class="resume-list">
                                        <!-- Start Resume Tab List Single Item -->
                                        <li class="resume-tab-list-single-item">
                                            <div class="content">
                                                <div class="left">
                                                    <span class="year">FEB 2021 - PRESENT</span>
                                                </div>
                                                <div class="right">
                                                    <h3 class="title">Firstcom Solutions Pte Ltd.</h3>
                                                    <span class="institute-name">Web Developer</span>
                                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p> --}}
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Resume Tab List Single Item -->
                                        <!-- Start Resume Tab List Single Item -->
                                        <li class="resume-tab-list-single-item">
                                            <div class="content">
                                                <div class="left">
                                                    <span class="year">JUN 2018 - JAN 2021</span>
                                                </div>
                                                <div class="right">
                                                    <h3 class="title">Myanmar Brilliant Stars Co., Ltd.</h3>
                                                    <span class="institute-name">Web Designer & Devlopment</span>
                                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p> --}}
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Resume Tab List Single Item -->
                                        <!-- Start Resume Tab List Single Item -->
                                        <li class="resume-tab-list-single-item">
                                            <div class="content">
                                                <div class="left">
                                                    <span class="year">FEB 2018  - PRESENT</span>
                                                </div>
                                                <div class="right">
                                                    <h3 class="title">Phoenix Developer Group</h3>
                                                    <span class="institute-name">EAM LEADER (Web Development)</span>
                                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been indus dard dummy text ever since the 1500 when an uniknown prnter took galley of type and scrambled make specimen book has not only five centuries the into electronic.</p> --}}
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Resume Tab List Single Item -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Resume Info Display Section :::... -->






@endsection