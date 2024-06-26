

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Reset Password </title>

      <link rel="shortcut icon" href="{{ asset('/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{ asset('/css/libs.min.css')}}">
      <link rel="stylesheet" href="{{ asset('/css/socialv.css')}}">
      <link rel="stylesheet" href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('/vendor/remixicon/fonts/remixicon.css')}}">
      <link rel="stylesheet" href="{{ asset('/vendor/vanillajs-datepicker/dist/css/datepicker.min.css')}}">
      <link rel="stylesheet" href="{{ asset('/vendor/font-awesome-line-awesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">

  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->

      <div class="wrapper">
    <section class="sign-in-page">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('/images/logo-full.png')}}" class="img-fluid" alt="logo"></a>
                        <div class="sign-slider overflow-hidden ">
                            <ul  class="swiper-wrapper list-inline m-0 p-0 ">
                                <li class="swiper-slide">
                                    <img src="{{ asset('/images/template/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>
                                <li class="swiper-slide">
                                    <img src="{{ asset('/images/template/login/2.png')}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>
                                <li class="swiper-slide">
                                    <img src="{{ asset('/images/template/login/3.png')}}" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Reset Password</h1>
                        {{-- <p>Enter your email address and we'll send you an email with instructions to reset your password.</p> --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger"><li>{{session('error')}}</li></div>
                        @endif
                        @if(session()->has('success'))
                            <div class="alert alert-success"> <li>{{session('success')}}</li></div>
                        @endif

                        <form action="{{ route('resetPassword') }}" method="POST" class="mt-4">
                            @csrf
                            <input type="hidden" name="token" value="{{$token}}">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email" value="{{$email ??old('email')}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword2">Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Confirm Password">
                            </div>

                            <button type="submit" class="btn btn-primary float">Reset Password</button>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="{{route('login')}}">Log In</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
      </div>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('/js/libs.min.js')}}"></script>
    <!-- slider JavaScript -->
    <script src="{{ asset('/js/slider.js')}}"></script>
    <!-- masonry JavaScript -->
    <script src="{{ asset('/js/masonry.pkgd.min.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('/js/enchanter.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('/js/sweetalert.js')}}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('/js/charts/weather-chart.js')}}"></script>
    <script src="{{ asset('/js/app.js')}}"></script>
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
    <script src="{{ asset('/js/lottie.js')}}"></script>

  </body>
</html>
