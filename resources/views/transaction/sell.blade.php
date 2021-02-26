@extends('layout.app', [
    'breadcrum' => [route('transaction.sell') => 'Sell']
    ])

@section('content')
    <!--  BEGIN CONTENT AREA  -->

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="zero-config" class="table table-hover" style="width: 100%">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Stock</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Commission</th>
                                <th class="no-content"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>
                                    <span class="badge badge-{{ $transaction->type == 1 ? 'info' : 'secondary' }}">
                                        {{ $transaction->type == 1 ? 'Buy' : 'Sell' }}
                                    </span>
                                </td>
                                <td><span class="bs-tooltip" title="{{ $transaction->stock->name }}" data-placement="right">{{ $transaction->stock->symbol }}</span></td>
                                <td>{{ $transaction->quantity }}</td>
                                <td>Rs. {{ $transaction->price }}</td>
                                <td>{{ $transaction->date }}</td>
                                <td>{{ $transaction->type == 2 ? $transaction->commission : 'N/A' }}</td>
                                <td class="float-right">
                                    <a href="{{ route('transaction.edit', $transaction) }}" data-toggle="tooltip" data-placement="top"
                                       title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-edit-2 text-success">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>

                                    <form action="{{ route('transaction.destroy', $transaction) }}" class="del-class" method="post" style="display: inline-block;">
                                        @method('delete')
                                        @csrf
                                        <button href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                title="Delete" style="border: none; background: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash-2 text-danger">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Type</th>
                                <th>Stock</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Commission</th>
                                <th class="no-content"></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--  END CONTENT AREA  -->
@endsection

@push('js')
    <script>

        $("#zero-config").DataTable({
            oLanguage: {
                oPaginate: {
                    sPrevious:
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    sNext:
                        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                },
                sInfo: "Showing page _PAGE_ of _PAGES_",
                sSearch:
                    '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                sSearchPlaceholder: "Search...",
                sLengthMenu: "Results :  _MENU_",
            },
            stripeClasses: [],
            lengthMenu: [10, 20, 30, 50],
            pageLength: 10,
        });

        $('.del-class').on('submit', function (e) {
            e.preventDefault();
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this! Transaction will be deleted permanently.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                padding: '2em'
            }).then(function (result) {
                if (result.value) {
                    e.target.submit();
                }
            });
        });

    </script>
@endpush
