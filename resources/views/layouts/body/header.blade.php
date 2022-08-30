        <header id="header">
            <div class="wpo-site-header wpo-site-header-s1">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand logo" href="index.html"><small>My</small>love<span><i
                                                class="fi flaticon-dove"></i></span></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        
                                        @foreach ($menuItems as $item)
                                            @if ($item->status == 'Enabled')
                                            <li class="active"><a href="{{ $item->link}}">{{ $item->name }}</a></li>   
                                            @endif
                                        @endforeach
                                       
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <a class="theme-btn" href="rsvp.html"><span class="text">Attend Now</span> <span class="mobile">
                                        <i class="fi flaticon-user"></i>
                                    </span></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>