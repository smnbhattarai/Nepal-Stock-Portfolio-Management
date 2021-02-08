@extends('layout.app-guest')

@section('content')

    <div class="fq-header-wrapper">

        @include('layout.partials.guest-top-nav')

        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center order-md-0 order-1">
                    <h1 class="">Have some questions / suggestions / problems</h1>
                    <p>Submit your queries and we will get back to you as soon as possible.</p>
                </div>
                <div class="col-md-6 order-md-0 order-0">
                    <a target="_blank" href="#" class="banner-img">
                        <img src="{{ asset('assets/img/faq.svg') }}" class="d-block" alt="header-image">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mx-auto">

                <form method="post" action="" class="mt-5">

                    <div class="form-group">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Name..." class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Email..." class="form-control" required>
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..." class="form-control" required>{{ old('message') }}</textarea>
                    </div>

                    <input type="submit" name="Send" class="mt-4 btn btn-primary mb-5 float-right" value="Send">

                </form>
            </div>
        </div>
    </div>


@endsection

@push('css')

@endpush
