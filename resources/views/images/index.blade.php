@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Images list of {{$product->name}}</h1>

                <a href="{{route('images.create',['id'=>$product->id])}}" class="btn btn-default">Upload Image</a>

                <table class="table  table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>EXTENSION</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($product->images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td><img src="{{url('uploads/'.$image->id.'.'.$image->extension) }}"class="img-thumbnail" width="80px" height="80px" alt=""/></td>
                        <td>{{ $image->extension }}</td>
                        <td>
                            <a href="{{ route('images.destroy',['id'=> $image->id]) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{ route('products') }}" class="btn btn-default">Back</a>
            </div>
        </div>
    @endsection
