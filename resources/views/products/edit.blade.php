@extends('layout.app')
@section('pageHeading','Add New product')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('products.update',$product->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{$product->description}}" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" value="{{$product->quantity}}" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" value="{{$product->price}}" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Stock</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" {{ $product->status==1?"selected":""}}>Active</option>
                        <option value="0" {{ $product->status==0?"selected":""}}>Inactive</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection