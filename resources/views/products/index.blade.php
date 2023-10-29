@extends('layout.app')
@section('pageHeading','Product List')

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <tr>
                    <th class="bg-primary text-white">ID</th>
                    <th class="bg-primary text-white">Product Name</th>
                    <th class="bg-primary text-white">Description</th>
                    <th class="bg-primary text-white">Quantity</th>
                    <th class="bg-primary text-white">Price</th>
                    <th class="bg-primary text-white">Status</th>
                    <th class="bg-warning text-white">Action</th>
                </tr>
                @forelse($product as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->product_name}}</td>
                        <td>{{$p->description}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->price}}</td>
                        <td>{{$p->status}}</td>
                        <td>
                            <a href="{{route('products.edit',$p->id)}}" class="btn btn-primary"> Edit </a>
                            <form action="{{route('products.destroy',$p->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>
                @endforelse
            </table>
            {{$product->links()}}
        </div>
    </div>

@endsection