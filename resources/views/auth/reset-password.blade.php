<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{ config('app.fullName') }} </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/css/pages/privacy/privacy.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body>


<div id="headerWrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 text-center mb-5">
                <a href="{{ url('/') }}" class="navbar-brand-privacy">
                    <img src="{{ asset('assets/img/90x90.png') }}" class="img-fluid" alt="{{ config('app.fullName') }}">
                </a>
            </div>
            <div class="col-md-12 col-sm-12 col-12 text-center">
                <h5 class="main-heading">Reset Password - {{ config('app.name') }}</h5>
            </div>
        </div>
    </div>
</div>

<div id="privacyWrapper" class="">
    <div class="privacy-container">
        <div class="privacyContent">

            <div class="privacy-content-container">

                <h5 class="mt-3">Reset password</h5>

                <p>Please fill in the form below to reset your password.</p>

                <form action="{{ url('/reset-password') }}" method="post">
                    @csrf

                    <input type="hidden" name="token" value="{{ request()->route('token') }}">

                    <div class="form-group col-md-6" style="padding-left: 0;">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email..." class="form-control" required>
                        @error('email')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group col-md-6" style="padding-left: 0;">
                        <input id="password" type="password" name="password" value="{{ old('password') }}" placeholder="Password..." class="form-control" required>
                        @error('password')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group col-md-6" style="padding-left: 0;">
                        <input id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password..." class="form-control" required>
                    </div>

                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Reset Password</button>
                     </div>



                </form>

            </div>

        </div>
    </div>
</div>

@include('layout.partials.guest-footer')

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<script>
    // Scroll To Top
    $(document).on('click', '.arrow', function(event) {
        event.preventDefault();
        var body = $("html, body");
        body.stop().animate({scrollTop:0}, 500, 'swing');
    });
</script>

</body>
</html>
