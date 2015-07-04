@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Products List</h1>
                <table class="table  table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>PRICE</th>
                        <th>FEATURED</th>
                        <th>RECOMMEND</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ ($product->featured == 1)? 'yes' : 'no' }}</td>
                        <td>{{ ($product->recommend == 1)? 'yes': 'no' }}</td>
                        <td>
                            <a href="{{ route('products.edit',['id'=> $product->id]) }}">Edit</a> |
                            <a href="{{ route('products.destroy',['id'=> $product->id]) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <a href="{{ route('products.create') }}">create product</a>
        </div>
    @endsection
