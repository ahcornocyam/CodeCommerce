@extends('app')
    @section('content')
        <div class="container-fluid">
            <div class="panel panel-default">
                <h1>Edit Category - {{ $category->name }}</h1>

                @if($errors->any)
                    <ul class="alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::model($category,['route'=>['categories.update',$category->id],'method'=>'put']) !!}
                    @include('category.form')
                {!! Form::close()!!}
            </div>
        </div>
    @endsection