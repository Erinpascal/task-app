@extends('layouts.app')

@section('content')



<div class="container">
<a class="btn btn-danger" href="{{route('tasks.create')}}">
        <i class="large material-icons">Create Organisation</i>
    </a>
  <h2><p>To Do List</p>      </h2>
        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Organisation Name</th>
        <th>Organisation Address</th>
         <th>Status</th>
         <th> Date Created</th>

        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      
      @foreach($organisation as $organisation)
      <tr>
        <td>{{$organisation->name}}</td>
        <td>{{$organisation->address}}</td>
         <td>{{$organisation->status}}</td>
         <td>{{$organisation->created_at}}</td>
    <td><a href="{{route('organisation.edit',$organisation->id)}}">Edit</a></td>
        </tr>
        @endforeach
      
     
      
    </tbody>
  </table>
</div>
@endsection
