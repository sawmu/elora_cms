
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/" target="black">
               <img style="width: 30px; height: 30px" src="{{asset('backend\elora.png')}}" alt="Elora Logo">
                <span class="brand-name">Elora Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-home-outline"></i>
                        <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('home.slider')}}">
                                    <span class="nav-text">Slider</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('update.star')}}">
                                    <span class="nav-text">Star Counts</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Portfolio</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('all.brand')}}">
                                    <span class="nav-text">Brand</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>





                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Menu</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('create.menu')}}">
                                    <span class="nav-text">Menu</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('create.social')}}">
                                    <span class="nav-text">Social Menu</span>

                                </a>
                            </li>


                       



                        </div>
                    </ul>
                </li>





                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('contact.all')}}" >
                        <i class="mdi mdi-account-card-details"></i>
                        <span class="nav-text">Contact Us</span> 
                    </a>
                 
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{route('contact.all')}}" >
                        <i class="mdi mdi-watch-variant"></i>
                        <span class="nav-text">Reservations</span> 
                    </a>
                 
                </li>








            </ul>

        </div>

        <hr class="separator" />

    </div>
</aside>