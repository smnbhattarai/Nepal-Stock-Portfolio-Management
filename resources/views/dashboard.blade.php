@extends('layout.app', [
    'breadcrum' => [route('dashboard') => 'Dashboard']
    ])

@section('content')
    <!--  BEGIN CONTENT AREA  -->

        <div class="layout-px-spacing">

            @if($portfolios->count())
            <div class="row layout-top-spacing">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Total Buy</h5>
                        </div>
                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <h3>Rs. {{ number_format($total_buy, 2) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Total Sell</h5>
                        </div>
                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <h3>Rs. {{ number_format($total_sell, 2) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Overall Trade</h5>
                        </div>
                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <h3>Rs. {{ number_format($total_sell + $total_buy, 2) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($portfolios->count())

                <div class="row layout-top-spacing showLater" style="visibility: hidden;">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Your Portfolio</h5>
                            </div>
                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="portfolioVerticalChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row layout-top-spacing showLater" style="visibility: hidden;">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="portfolioPieChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <ul class="list-group ">
                                        @foreach($portfolios as $portfolio)
                                            <li class="list-group-item">{{ $loop->iteration }}. {{ $portfolio->stock->name }} ({{ $portfolio->stock->symbol }})</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @else

                <div class="layout-px-spacing">
                    <div class="infobox-2 mt-5">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                        </div>
                        <h5 class="info-heading">Hello {{ auth()->user()->profile->name }},</h5>
                        <p class="info-text">Time to add some portfolio to get started with the system.</p>
                        <a class="info-link" href="{{ route('portfolio.create') }}">Add Portfolio</a>
                    </div>
                </div>

            @endif

        </div>


    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    @if($portfolios->count())
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @endif
@endpush

@push('css')
    <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
@endpush
