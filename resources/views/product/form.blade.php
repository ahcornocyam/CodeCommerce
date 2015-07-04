<div>
    @if(isset($product->id))
        {!! Form::open(['route'=>['products.update',$product->id],'method'=>'put']) !!}
    @else
        {!! Form::open(['route'=>['products.store'],'method'=>'post']) !!}
    @endif
    <div class="well-lg">
        <div class="form-group-lg">
            {!! Form::label('name','Name:')!!}
            {!! Form::text('name',isset($product->name)? $product->name : null ,['class'=>'form-control'])!!}
        </div>
        <div class="">
            {!! Form::label('description','Description:')!!}
            {!! Form::textarea('description',isset($product->description)? $product->description: null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group-lg">
            {!! Form::label('price','Price:')!!}
            {!! Form::text('price',isset($product->price)? $product->price: null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group-lg">
            {!! Form::label('featured','Featured:')!!}
            {!! Form::checkbox('featured',1,($product->featured == 1)? true : false ) !!}

        </div>
        <div class="form-group-lg">
            {!! Form::label('recommend','Recommend:')!!}
            {!! Form::checkbox('recommend',1,($product->recommend == 1)? true : false ) !!}

        </div>
        <div class="form-group-lg">
            {!! Form::submit('Save Product',['class'=>'form-control btn btn-primary']) !!}
        </div>

    </div>
    {!! Form::close() !!}
</div>
