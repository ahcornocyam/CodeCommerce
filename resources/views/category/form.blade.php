<div>

    <div class="well-lg">
        <div class="form-group-lg">
            {!! Form::label('name','Name:')!!}
            {!! Form::text('name',null ,['class'=>'form-control'])!!}
        </div>
        <div class="form-group-lg">
            {!! Form::label('description','Description:')!!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group-lg">
            {!! Form::submit('Save Category',['class'=>'btn btn-primary']) !!}
            <a href="{{ route('categories') }}" class="btn btn-default">Back</a>
        </div>

    </div>

</div>