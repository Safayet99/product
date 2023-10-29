@extends('layout.app')
@section('pageHeading','Add New Product')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('products.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Stock</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection