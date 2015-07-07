<div>
    @if(isset($category->id))
        {!! Form::open(['route'=>['categories.update',$category->id],'method'=>'put']) !!}
    @else
        {!! Form::open(['route'=>['categories.store'],'method'=>'post']) !!}
    @endif
    <div class="well-lg">
        <div class="form-group-lg">
            {!! Form::label('name','Name:')!!}
            {!! Form::text('name',isset($category->name)? $category->name : null ,['class'=>'form-control'])!!}
        </div>
        <div class="form-group-lg">
            {!! Form::label('description','Description:')!!}
            {!! Form::textarea('description',isset($category->description)? $category->description: null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group-lg">
            {!! Form::submit('Save Category',['class'=>'btn btn-primary']) !!}
            <a href="{{ route('categories') }}" class="btn btn-default">Back</a>
        </div>

    </div>
    {!! Form::close() !!}
</div>