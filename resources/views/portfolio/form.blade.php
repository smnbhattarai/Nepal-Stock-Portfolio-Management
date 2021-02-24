@extends('layout.app', [
    'breadcrum' => [route('portfolio.create') => 'Create Portfolios']
    ])

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div id="fs2Placeholder" class="col-lg-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>
                                    @if($portfolio->exists)
                                        Edit Portfolio ({{ $portfolio->stock->symbol }})
                                    @else
                                        Add New Portfolio
                                    @endif

                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        @if($portfolio->exists)
                            <form action="{{ route('portfolio.update', $portfolio) }}" method="post">
                            @method('PUT')
                        @else
                            <form action="{{ route('portfolio.store') }}" method="post">
                        @endif

                        @csrf

                        @if($portfolio->exists)
                            <input class="form-control mb-3" type="text" placeholder="{{ $portfolio->stock->symbol }} ({{ $portfolio->stock->name }})" readonly>
                            <input type="hidden" name="symbol" value="{{ $portfolio->stock_id }}">
                        @else
                            <select class="placeholder js-states form-control" name="symbol" required>
                                <option value="">Choose a symbol ...</option>
                                @foreach($stocks as $stock)
                                    <option value="{{ $stock->id }}" @if($stock->id == old('symbol', $portfolio->stock_id)) selected @endif>
                                        {{ $stock->symbol }} ({{ $stock->name }})
                                    </option>
                                @endforeach
                            </select>
                            @error('symbol')
                            <div class="invalid-feedback" style="display: block; margin-top: -20px; margin-bottom: 20px;">{{ $message }}</div>
                            @enderror
                        @endif


                        <div class="form-group mb-4">
                            <label for="description">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $portfolio->description) }}" id="description" name="description" placeholder="Add some details if you like" maxlength="180">
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary" value="Save">

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $(".placeholder").select2({
                placeholder: "Choose a Symbol",
                allowClear: true
            });
            $('input#description').maxlength({
                separator: ' of ',
                preText: 'You have ',
                postText: ' chars remaining.'
            });
        });
    </script>
@endpush
