@extends('layouts.main')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Product Code</label>
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror" name="product_code" value="@if(isset($product['product_code'])) {{$product['product_code']}} @else {{ old('product_code') }} @endif">

                                @error('product_code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Product Name</label>
                                <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="@if(isset($product['product_name'])) {{$product['product_name']}} @else {{ old('product_name') }} @endif" >

                                @error('product_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Stock</label>
                                <input type="number" class="form-control @error('product_stock') is-invalid @enderror" name="product_stock" value="@if(isset($product['product_stock'])){{(int)$product['product_stock']}}@else{{old('product_stock')}}@endif" >

                                @error('product_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Save</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
