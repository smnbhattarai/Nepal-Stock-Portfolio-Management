@extends('layout.app', [
    'breadcrum' => [route('dashboard') => 'Dashboard']
    ])

@section('content')
    <!--  BEGIN CONTENT AREA  -->

        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

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

        </div>


    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush

@push('css')
    <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
@endpush
