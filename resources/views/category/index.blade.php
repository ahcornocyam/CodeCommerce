@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Categories List</h1>

                <a href="{{route('categories.create')}}" class="btn btn-default">create category</a>

                <table class="table  table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPtION</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <a href="{{route('categories.edit',['id'=> $category->id])}}">Edit</a> |
                            <a href="{{route('categories.destroy',['id'=> $category->id])}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="text-center">
                    {!! $categories->render() !!}
                </div>
            </div>
        </div>
    @endsection