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

                            <h4>Create Post</h4>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="/clothes" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('username') }}">
                                </div>

                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <select class="form-control" id="brand" name="brand_id">
                                        <option disabled selected value> -- select an option -- </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cost">Cost</label>
                                    <input type="text" class="form-control" id="cost" name="cost" value="{{ old('username') }}">
                                </div>

                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" id="color" name="color" value="{{ old('username') }}">
                                </div>

                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <select class="form-control" id="size" name="size">
                                        <option disabled selected value> -- select an option -- </option>                                        <option value="S">Small</option>
                                        <option value="M">Medium</option>
                                        <option value="L">Large</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" >{{ old('username') }}</textarea>
                                </div>

                                @csrf

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Add Clothes">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
