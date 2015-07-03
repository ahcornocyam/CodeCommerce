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
                {!! Form::open(['route'=>['categories.update',$category->id],'method'=>'put']) !!}
                    <div class="form-group">
                        {!! Form::label('name','Name:')!!}
                        {!! Form::text('name',$category->name,['class'=>'form-control'])!!}
                        {!! Form::label('description','Description:')!!}
                        {!! Form::textarea('description',$category->description,['class'=>'form-control']) !!}
                        {!! Form::submit('Save Category',['class'=>'form-control btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}


            </div>
        </div>
    @endsection