@extends('admin.layout.admin')

@section('content')
<h1>Add Product</h1>
<div class="row">
	<div class="col-md-8 col-md-offset-3">
	{!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class '=> 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description' ,null, array('class '=>' form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('size', 'Size') }}
		{{ Form::select('size', ['Left '=>' small', 'Right' => ' medium', 'large' => 'Large'] ,null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::label('category_id','Categories') }}
		{{ Form::select('category_id',$categories, null, ['class' => 'form-control', 'placeholder' => 'Select']) }}
	</div>


 <div class="form-group">
		{{ Form::label('price', 'Price') }}
		{{ Form::text('price', null, array('class '=> 'form-control')) }}
	</div>

	<div class="form-group">
		{{Form::label('image','Image')}}
		{{Form::file('image',array('class'=>'form-control'))}}
	</div>

     {{ Form::submit('Create', array('class' => 'btn btn-warning')) }}
	{!! Form::close() !!}
</div>
</div>
@endsection