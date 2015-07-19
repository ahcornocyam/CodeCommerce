@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Create Product</h1>

                @if($errors->any)
                    <ul class="alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['route'=>['products.store'],'method'=>'post'])!!}
                    @include('product.form')
                {!! Form::close()!!}
            </div>
        </div>
    @endsection