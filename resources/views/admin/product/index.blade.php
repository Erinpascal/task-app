@extends('admin.layout.admin')

@section('content')
<h1> Products</h1>

<ul>
	@forelse($products as $products)
	
	<li>
		<h4>NAME of products{{$products->name}}</h4>
		<h4>NAME of Category:{{$products->category->name}}</h4>
		<form  action="{{route('product.destroy',$products->id)}}" method=" POST">
			{{csrf_field()}}
			{{method_field('DELETE')}}
             <input class="btn btn-sm btn-danger" type="submit" value="Delete">
		</form>
	</li>
	@empty
	<h3>No Products</h3>
	
	@endforelse
</ul>

@endsection 