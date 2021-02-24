<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title> {{ config("app.name") }} </title>

    <link href="{{ asset("assets/css/loader.css") }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/plugins.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/forms/theme-checkbox-radio.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/forms/switches.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('css')

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

<script src="{{ asset("assets/js/loader.js") }}"></script>
<script src="{{ asset("assets/js/libs/jquery-3.1.1.min.js") }}"></script>
<script src="{{ asset("bootstrap/js/popper.min.js") }}"></script>
<script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("plugins/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
<script src="{{ asset('plugins/sweetalerts/promise-polyfill.js') }}"></script>
<script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-maxlength/custom-bs-maxlength.js') }}"></script>
<script src="{{ asset('plugins/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('plugins/flatpickr/custom-flatpickr.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset("assets/js/app.js") }}"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset("assets/js/custom.js") }}"></script>
<script src="{{ asset("assets/js/forms/bootstrap_validation/bs_validation_script.js") }}"></script>
<script src="{{ asset('plugins/notification/snackbar/snackbar.min.js') }}"></script>
<script src="{{ asset('assets/js/components/notification/custom-snackbar.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>

<script src="{{ mix('/js/main.js') }}"></script>

@stack('js')

@include('layout.partials.notification')

</body>
</html>
