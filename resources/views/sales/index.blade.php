@extends('layouts.app')

@section('content')
    <div class="container">
        @include('sales.search')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sales Dashboard</div>

                    <div class="panel-body">
                        @if (count($sales) > 0)
                            <table class="table table-hover table-bordered table-striped ">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Address</th>
                                    <th>Price</th>
                                    <th>Neighborhood</th>
                                    <th>Bedroom</th>
                                    <th>Badroom</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sales as $sale)
                                    <tr>
                                        <td>{{ $sale->id }}</td>
                                        <td>{{ $sale->address }}</td>
                                        <td>{{ $sale->price }}</td>
                                        <td>{{ $sale->neighborhood }}</td>
                                        <td>{{ $sale->bedroom }}</td>
                                        <td>{{ $sale->badroom }}</td>
                                        <td>{{ $sale->type }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $sales->appends($_GET)->links() }}
                        @else
                            Sorry, no data!!!
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
