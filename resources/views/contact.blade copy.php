@extends('layouts.master_contact')
 
@section('contact_us')

       <!-- ...::: Start Breadcrumb Section :::... -->
       <div class="breadcrumb-section section-bg overflow-hidden pos-relative">
        <div class="breadcrumb-shape-top-left"></div>
        <div class="breadcrumb-shape-bottom-right"></div>
        <div class="breadcrumb-box">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Contact Me</h2>
                            <ul class="breadcrumb-link">
                                <li><a href="/">Home</a></li>
                                <li class="active" aria-current="page">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...::: Start Contact Section :::... -->
    <div class="contact-section section-gap-tb-165">
        <div class="contact-box pos-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Map Area-->
                        <div class="map">
                            <div class="gmap-box">
                                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7288488427444!2d103.84871151475407!3d1.3389947990234148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da176fe1a34481%3A0x6d17b88a40d99381!2sGem%20Residences!5e0!3m2!1sen!2ssg!4v1647230441100!5m2!1sen!2ssg"></iframe>
                            </div>
                        </div>
                        <!-- End Map Area -->
                    </div>
                </div>
                <div class="row flex-lg-row flex-column-reverse">
                    <div class="col-lg-4">
                        <div class="contact-sidebar-wapper">
                            <div class="contact-sidebar">
                                <!-- Start Project Sidebar Item -->
                                <ul class="contact-sidebar-list-item">
                                    <!-- Start contact Single Box -->
                                    <li class="contact-sidebar-single-box">
                                        <h6 class="title-text">Phone:</h6>
                                        <a href="tel:+0123456789" class="link">86572648</a>
                                    </li>
                                    <!-- End contact Single Box -->
                                    <!-- Start contact Single Box -->
                                    <li class="contact-sidebar-single-box">
                                        <h6 class="title-text">Email:</h6>
                                        <a href="mailto:sawmukahbaw191@gmail.com" class="link">sawmukahbaw191@gmail.com</a>
                                    </li>
                                    <!-- End contact Single Box -->
                                    <!-- Start contact Single Box -->
                                    <li class="contact-sidebar-single-box">
                                        <h6 class="title-text">Website:</h6>
                                        <a href="https://www.example.com" class="link">www.mukahbaw.com</a>
                                    </li>
                                    <!-- End contact Single Box -->
                                    <!-- Start contact Single Box -->
                                    <li class="contact-sidebar-single-box">
                                        <h6 class="title-text">Address:</h6>
                                        <span class="text"> 1 Lor. 5 Toa Payoh, Singapore 319458</span>
                                    </li>
                                    <!-- End contact Single Box -->
                                </ul>
                                <!-- End Project Sidebar Item -->
                            </div>
                            <!-- Start Sidebar Widget Single Item - Social Widgets -->
                            <div class="sidebar-widget-single-area ">
                                <h3 class="title">Follow Me</h3>
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com/Tech-Sound-104071511660811" target="_blank"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="https://github.com/sawmu" target="_blank"><i class="icofont-github"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/saw-mu-ka-hbaw-aye-313104158/" target="_blank"><i class="icofont-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Sidebar Widget Single Item - Social Widgets -->
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="contact-form-wrapper section-mt-165">
                            <!-- Start Section Content -->
                            <div class="content">
                                <span class="section-tag">Get In Touch</span>
                                <h2 class="title">If you have any porject or need help. Contact me</h2>
                               
                            </div>
                            <!-- End Section Content -->

                            <!-- Start Contact Form Box -->
                            <div class="contact-form-box">
                          
                                <form id="contact-form" class="default-form contact-form" action="{{ route('contact.store') }}" method="post">
                                @csrf
                                    <div class="row mb-n6">
                                        <div class="col-xl-6 mb-6">
                                            <div class="default-form-group">
                                                <input name="name" type="text" placeholder="Name" required>
                                            </div>
                                        </div>



                                        <div class="col-xl-6 mb-6">
                                            <div class="default-form-group">
                                                <input name="email" type="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-6">
                                            <div class="default-form-group">
                                                <input name="phone" type="tel" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-6">
                                            <div class="default-form-group">
                                                <input name="subject" type="text" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-6">
                                            <div class="default-form-group">
                                                <textarea name="message" placeholder="Comment" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-6">
                                            <div class="default-form-group tex-center">
                                                <button type="submit" class="btn btn-lg btn-outline-one">Submit Message</button>
                                            </div>
                                        </div>
                                        <p class="form-messege"></p>
                                    </div>
                                </form>
                            </div>
                            <!-- End Contact Form Box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Contact Section :::... -->




@endsection