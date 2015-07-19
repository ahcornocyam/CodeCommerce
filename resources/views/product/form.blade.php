<div>

    <div class="well-lg">
        <div class="form-group-lg">
            {!! Form::label('category','Category:')!!}
            {!! Form::select('category_id',$categories,null ,['class'=>'form-control'])!!}
        </div>
        <div class="form-group-lg">
            {!! Form::label('name','Name:')!!}
            {!! Form::text('name',null ,['class'=>'form-control'])!!}
        </div>
        <div class="">
            {!! Form::label('description','Description:')!!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group-lg">
            {!! Form::label('price','Price:')!!}
            {!! Form::text('price',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group-lg">
            {!! Form::label('featured','Featured:')!!}
            {!! Form::checkbox('featured',1,false) !!}

        </div>
        <div class="form-group-lg">
            {!! Form::label('recommend','Recommend:')!!}
            {!! Form::checkbox('recommend',1,false) !!}

        </div>
        <div class="form-group-lg">
            {!! Form::label('getTagListAttribute','tags:') !!}
            {!! Form::text('getTagListAttribute',null ,['class'=>'form-control']) !!}
        </div>

        <div class="form-group-lg">
            {!! Form::submit('Save Product',['class'=>'btn btn-primary']) !!}
            <a href="{{ route('products') }}" class="btn btn-default">Back</a>
        </div>

    </div>

</div>
