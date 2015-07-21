@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Edit Product - {{ $product->name }}</h1>

                @if($errors->any)
                    <ul class="alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::model($product,['route'=>['products.update',$product->id],'method'=>'put']) !!}
                    @include('product.form')
            </div>
        </div>
    @endsection