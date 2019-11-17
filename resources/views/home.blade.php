@extends('layouts.app')

@section('content')



<div class="container">
<a class="btn btn-danger" href="{{route('tasks.create')}}">
        <i class="large material-icons">add</i>
    </a>
  <h2><p>To Do List</p>      </h2>
        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Task Name</th>
        <th>Task Description</th>
        <th>Task Date</th>
         <th>Due Date</th>

        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      
      @foreach($tasks as $tasks)
      <tr>
        <td>{{$tasks->name}}</td>
        <td>{{$tasks->description}}</td>
        <td>{{$tasks->task_date}}</td>
         <td>{{$tasks->status}}</td>
        <td> @if(Auth::user() == $tasks->user)
    |<a href="{{ route('task.delete',['task_id' => $tasks->id]) }}">Delete</a>|<a href="{{route('tasks.edit',$tasks->id)}}">Edit</a></td>
    @endif
        </tr>
        @endforeach
      
     
      
    </tbody>
  </table>
</div>
@endsection
