@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">


  	@foreach($tasks as $tasks)

  	{{$tasks->name}}<br>

  	 @if(Auth::user() == $tasks->user)
    |<a href="{{ route('task.delete',['task_id' => $tasks->id]) }}">Delete</a>|<a href="{{route('tasks.edit',$tasks->id)}}">Edit</a><br>
    @endif

<hr>

  	@endforeach

  </div>
</div>
@endsection