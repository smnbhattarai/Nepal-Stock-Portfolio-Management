<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{ config("app.name") }} </title>
    <link rel="icon" type="image/x-icon" href="{{ asset("assets/img/favicon.ico") }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/css/main.css") }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('assets/css/pages/faq/faq.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>
<body>

<div class="fq-header-wrapper">

    @include('layout.partials.guest-top-nav')

    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center order-md-0 order-1">
                <h1 class="">FAQ</h1>
                <p class="">Get Instant Answer From Popular Question Asked By Other Users</p>
                <a href="{{ route('register') }}">
                    <button class="btn">Start now</button>
                </a>
            </div>
            <div class="col-md-6 order-md-0 order-0">
                <a target="_blank" href="#" class="banner-img">
                    <img src="{{ asset('assets/img/faq.svg') }}" class="d-block" alt="header-image">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="faq container">

    <div class="faq-layouting layout-spacing">

        <div class="fq-tab-section">
            <div class="row">
                <div class="col-md-12 mb-5 mt-5">

                    <h2>Some frequently asked questions</h2>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="fqheadingOne">
                                <div class="mb-0" data-toggle="collapse" role="navigation" data-target="#fqcollapseOne"
                                     aria-expanded="false" aria-controls="fqcollapseOne">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-code">
                                        <polyline points="16 18 22 12 16 6"></polyline>
                                        <polyline points="8 6 2 12 8 18"></polyline>
                                    </svg>
                                    <span class="faq-q-title">How do I get started?</span>
                                </div>
                            </div>
                            <div id="fqcollapseOne" class="collapse" aria-labelledby="fqheadingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Signup with your E-Mail and start adding scrip.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@include('layout.partials.guest-footer')

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('assets/js/pages/faq/faq.js') }}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
