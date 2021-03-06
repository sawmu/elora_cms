<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <title>Sign Up - Sleek Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css')}}" />

   <!-- FAVICON -->
   <link href="{{asset('backend\elora.png')}}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
  </head>

  <body class="" id="body">
    <div class="container d-flex align-items-center justify-content-center vh-100">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="/index.html">
                  <img style="width: 30px; height: 30px" src="{{asset('backend\elora.png')}}" alt="Elora Logo">

                  <span class="brand-name">Elora CMS</span>
                </a>
              </div>
            </div>

            <div class="card-body p-5">
              <h4 class="text-dark mb-5">Sign In</h4>

              {{-- <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp" placeholder="Name" name="name">
                  </div>

                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
                  </div>

                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password" autocomplete="new-password">
                  </div>

                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="cpassword" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                  </div>

                  <div class="col-md-12">
                    <div class="d-inline-block mr-3">
                      <label class="control control-checkbox">
                        <input type="checkbox" />
                        <div class="control-indicator"></div>
                        I Agree the terms and conditions
                      </label>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>

                    <p>Already have an account?
                      <a class="text-blue" href="{{ route('login') }}">Sign in</a>
                    </p>
                  </div>
                </div>
              </form> --}}

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                  <div id="email" class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="email" name="email">
                  </div>

                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password"> 
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">Remember me
                          <input name="remember" type="checkbox" />
                          <div class="control-indicator"></div>
                        </label>
                      </div>

                      {{-- <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p> --}}
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

                    {{-- <p>Don't have an account yet ?
                      <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                    </p> --}}
                  </div>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/sleek.js')}}"></script>
  <link href="{{ asset('backend/assets/options/optionswitch.css')}}" rel="stylesheet">
<script src="{{ asset('backend/assets/options/optionswitcher.js')}}"></script>
</body>
</html>
