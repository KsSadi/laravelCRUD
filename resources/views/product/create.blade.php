
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product') }} <button class="btn btn-secondary float-end">Back</button></div>

                    <div class="card-body">
                        <form method="post" action="{{route('product.store')}}" class="form-group">
                            @csrf

                            <lebel class="">Product Name</lebel>
                            <br>

                            <input name="name" class="form-control">

                            <lebel class="">Product Price</lebel>
                            <br>

                            <input name="price" class="form-control">
<br>
                            <button type="submit" class="btn btn-outline-success">Submit</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
