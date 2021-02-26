@extends('layout.app', [
    'breadcrum' => [route('transaction.create') => 'Create transactions']
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
                                    @if($transaction->exists)
                                        Edit Transaction ({{ $transaction->stock->symbol }})
                                    @else
                                        Add New transaction
                                    @endif
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        @if($transaction->exists)
                            <form action="{{ route('transaction.update', $transaction) }}" method="post">
                            @method('PUT')
                        @else
                            <form action="{{ route('transaction.store') }}" method="post">
                        @endif

                        @csrf


                            @if($transaction->exists)
                                <input class="form-control mb-3" type="text" placeholder="{{ $transaction->type == 1 ? 'Buy' : 'Sell' }}" readonly>
                                <input type="hidden" name="stock_id" value="{{ $transaction->type }}">
                            @else
                                <label for="type">Choose buy/sell</label>
                                <select class="js-states type form-control @error('type') is-invalid @enderror" name="type" id="type">
                                    <option value="">Choose type ...</option>
                                    <option value="1" @if(1 == old('type', $transaction->type)) selected @endif>Buy</option>
                                    <option value="2" @if(2 == old('type', $transaction->type)) selected @endif>Sell</option>
                                </select>
                                @error('type')
                                <div class="invalid-feedback" style="display: block; margin-top: -20px; margin-bottom: 20px;">{{ $message }}</div>
                                @enderror
                            @endif



                        @if($transaction->exists)
                            <input class="form-control mb-3" type="text" placeholder="{{ $transaction->stock->symbol }} ({{ $transaction->stock->name }})" readonly>
                            <input type="hidden" name="stock_id" value="{{ $transaction->stock_id }}">
                        @else
                            <label for="stock">Choose stock</label>
                            <select class="stock js-states form-control" name="stock" id="stock">
                                <option value="">Choose a symbol ...</option>
                                @foreach($portfolios as $portfolio)
                                    <option value="{{ $portfolio->stock_id }}" @if($portfolio->stock_id == old('stock', $transaction->stock_id)) selected @endif>
                                        {{ $portfolio->stock->symbol }} ({{ $portfolio->stock->name }})
                                    </option>
                                @endforeach
                            </select>
                            @error('stock')
                            <div class="invalid-feedback" style="display: block; margin-top: -20px; margin-bottom: 20px;">{{ $message }}</div>
                            @enderror
                        @endif

                        <div class="form-group mb-4">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $transaction->quantity) }}" id="quantity" name="quantity" placeholder="Eg: 175">
                            @error('quantity')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="price">Total Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $transaction->price) }}" id="price" name="price" placeholder="Eg: 500">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="date">Buy/Sell Date</label>
                            <input id="date" name="date" value="{{ old('date', $transaction->date) }}" class="form-control flatpickr flatpickr-input" type="text" placeholder="Select buy/sell date">
                        </div>

                        <div class="form-group mb-4 commission">
                            <label for="commission">Commission</label>
                            <input type="text" class="form-control @error('commission') is-invalid @enderror" value="{{ old('commission', $transaction->commission) }}" id="commission" name="commission" placeholder="Broker commission amount">
                            @error('commission')
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
    <script src="{{ asset('plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('plugins/flatpickr/custom-flatpickr.js') }}"></script>

    <script>
        $(document).ready(function() {

            $(".stock").select2({
                placeholder: "Choose a Symbol",
                allowClear: true
            });

            $(".type").select2({
                placeholder: "Choose Buy/Sell",
                allowClear: true,
            });

            $('#date').flatpickr({
                dateFormat: "Y-m-d",
                maxDate: "{{ date('Y-m-d') }}"
            });

            $('#type').on('select2:select', function (e) {
                var data = e.params.data;
                var id = parseInt(data.id);
                var commissionSel = $(".commission");
                if(id === 1) {
                    commissionSel.hide(300);
                    commissionSel.val();
                } else {
                    commissionSel.show(300);
                }
            });

            $('#stock').on('select2:select', function (e) {
                var data = e.params.data;
                var stock_id = parseInt(data.id);
                var buySell = $('#type').val() === '' ? null : parseInt($('#type').val());
                if(buySell !== null && buySell === 2) {
                    $.post("{{ route('ajax.stock.remaining') }}", { stock_id: stock_id })
                    .done(function(res) {
                        $("#quantity").val(res.data);
                    })
                    .fail(function(res) {

                    });
                }

            });

        });
    </script>
@endpush

@push('css')
    <link href="{{ asset('plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css" />
@endpush
