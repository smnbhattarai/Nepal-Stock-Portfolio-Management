@extends('layout.app', [
    'breadcrum' => [route('portfolio.index') => 'Portfolios']
    ])

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">



        </div>

    </div>

    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script>
        $(".placeholder").select2({
            placeholder: "Choose a Symbol",
            allowClear: true
        });
    </script>
@endpush
