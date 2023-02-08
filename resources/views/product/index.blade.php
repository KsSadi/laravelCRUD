
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product') }} <a href="{{route('product.create')}}"><button class="btn btn-secondary float-end">Insert</button></a> </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="flex-row">
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                            @foreach($products as $product)
                                <tr class="flex-row">
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-outline-success">Edit</a> </td>
                                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                                       @csrf
                                        @method('DELETE');
                                        <td><button type="submit" class="btn btn-outline-danger">Delete</button> </td>

                                    </form>


                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
