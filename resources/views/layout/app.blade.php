<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{ config("app.name") }} </title>
    <link rel="icon" type="image/x-icon" href="{{ asset("assets/img/favicon.ico") }}"/>
    <link href="{{ asset("assets/css/loader.css") }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset("assets/js/loader.js") }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/plugins.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("plugins/apex/apexcharts.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/dashboard/dash_1.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/authentication/form-2.css") }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/forms/theme-checkbox-radio.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/forms/switches.css") }}">
</head>
<body class="{{ $bodyClass ?? '' }}">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

@auth

    @include('layout.partials.topNav')

    @include('layout.partials.secondNav')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('layout.partials.sideNav')

        <div id="content" class="main-content">

            @yield('content')
            @include('layout.partials.footer')

        </div>

    </div>
    <!-- END MAIN CONTAINER -->

@else

    @yield('content')

@endauth


<script src="{{ asset("assets/js/libs/jquery-3.1.1.min.js") }}"></script>
<script src="{{ asset("bootstrap/js/popper.min.js") }}"></script>
<script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("plugins/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
<script src="{{ asset("assets/js/app.js") }}"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="{{ asset("assets/js/custom.js") }}"></script>
<script src="{{ asset("plugins/apex/apexcharts.min.js") }}"></script>
<script src="{{ asset("assets/js/dashboard/dash_1.js") }}"></script>
<script src="{{ asset("assets/js/authentication/form-2.js") }}"></script>
<script src="{{ asset("assets/js/forms/bootstrap_validation/bs_validation_script.js") }}"></script>

<script src="{{ mix('/js/main.js') }}"></script>

</body>
</html>
