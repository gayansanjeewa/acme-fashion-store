@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="" class="btn btn-success">Add Clothes</a>

                        <div>
                            @if(empty($clothes))
                                <div class="alert alert-warning" role="alert">
                                    Clothes not found
                                </div>
                            @else
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Product Code</th>
                                        <th scope="col">Cost (LKR)</th>
                                        <th scope="col">Selling Price (LKR)</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($clothes as $clothe)
                                        <tr>
                                            <td>{{ $clothe->product_id }}</td>
                                            <td>{{ $clothe->name }}</td>
                                            <td>{{ $clothe->product_code }}</td>
                                            <td>{{ $clothe->cost }}</td>
                                            <td>{{ $clothe->selling_price }}</td>
                                            <td>{{ $clothe->brand_id }}</td>
                                            <td>{{ $clothe->color }}</td>
                                            <td>{{ $clothe->size }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
