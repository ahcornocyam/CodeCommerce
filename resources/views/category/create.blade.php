@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Create Category</h1>

                @if($errors->any)
                    <ul class="alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['route'=>['categories.store'],'method'=>'post']) !!}
                    @include('category.form')
                {!! Form::close()!!}
            </div>
        </div>
    @endsection