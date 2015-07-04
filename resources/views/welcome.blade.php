@extends('app')
    @section('content')
        <div class="content">
            <div>
                <p>Acessar</p>
                <ul class="navbar nav">
                    <li><a href="{{route('categories')}}">Categories</a></li>
                    <li><a href="{{route('products')}}">Products</a></li>
                </ul>
            </div>
        </div>
    @endsection