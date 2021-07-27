@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-md btn-success mb-3">Add Product</a>
                        <form class="form-inline" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mx-sm-3 mb-2">
                              <input id="search" type="text" name="search" class="form-control" placeholder="Search" value="{{$search}}">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                            <a class="btn btn-warning mb-2" href="{{ route('product.list') }}">Reset</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Product Code</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($products as $product)
                                <tr>
                                    <td> {{$product->product_code}} </td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_stock}}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('product.delete', $product->id) }}" method="POST">
                                            <a href="{{ route('product.update', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Product Not Found.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                          {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
