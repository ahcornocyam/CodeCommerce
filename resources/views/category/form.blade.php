<div>
    @if(isset($category->id))
        {!! Form::open(['route'=>['categories.update',$category->id],'method'=>'put']) !!}
    @else
        {!! Form::open(['route'=>['categories.store'],'method'=>'post']) !!}
    @endif
    <div class="form-group">
        {!! Form::label('name','Name:')!!}
        {!! Form::text('name',isset($category->name)? $category->name : null ,['class'=>'form-control'])!!}
        {!! Form::label('description','Description:')!!}
        {!! Form::textarea('description',isset($category->description)? $category->description: null,['class'=>'form-control']) !!}
        {!! Form::submit('Save Category',['class'=>'form-control btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>