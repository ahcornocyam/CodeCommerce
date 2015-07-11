<div>

    {!! Form::open(['route'=>['images.store',$product->id],'method'=>'post','enctype'=>'multipart/form-data']) !!}
    <div class="well-lg">
        <div class="form-group-lg">
            {!! Form::label('image','Image:')!!}
            {!! Form::file('image', null ,['class'=>'form-control'])!!}
        </div>
        <div class="form-group-lg">
            {!! Form::submit('Upload Image',['class'=>'btn btn-primary']) !!}
            <a href="{{ route('images',['id'=>$product->id]) }}" class="btn btn-default">Back</a>
        </div>

    </div>
    {!! Form::close() !!}
</div>
