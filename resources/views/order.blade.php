@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orders') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <!-- <thead>
                            <tr>
                                <th class="th-sm">Customer Name
                                </th>
                                <th class="th-sm">Product Name
                                </th>
                                <th class="th-sm">Variant Name
                                </th>
                                <th class="th-sm">Price Per Piece
                                </th>
                                <th class="th-sm">Quantity
                                </th>
                                <th class="th-sm">Total Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            </tr>
                            <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            </tr>
                        </tbody> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
