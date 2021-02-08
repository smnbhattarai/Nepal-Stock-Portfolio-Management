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
                <h5 class="main-heading">Verify Email - {{ config('app.name') }}</h5>
            </div>
        </div>
    </div>
</div>

<div id="privacyWrapper" class="">
    <div class="privacy-container">
        <div class="privacyContent">

            <div class="privacy-content-container">

                <h5 class="mt-5">Please verify your E-Mail address</h5>

                <p>Please follow the link provided in email to continue the verification process.</p>

                <h5 class="mt-5">Didn't receive verification email?</h5>

                <p>Please click on the button below to resend verification link.</p>

                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success mt-5" role="alert">
                        <strong>Success!</strong> A new email verification link has been emailed to you!</button>
                    </div>
                @endif

                <form action="{{ url('email/verification-notification') }}" method="post">
                    @csrf
                    <div class="d-sm-flex justify-content-between mt-5">
                        <div class="field-wrapper">
                            <button type="submit" class="btn btn-primary">Resend verification E-Mail</button>
                        </div>
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
