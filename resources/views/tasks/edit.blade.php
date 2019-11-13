
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
  <form action="/task/{{$tasks->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}


         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="control-form">
         <label for="name"> Name</label>
        <input type="text" name="name" id="name" value="{{Request::old('name') ? : $tasks->name }}">
        </div>
        <br>
          <div class="control-form">

         <label for="description"> Description</label>
        <input type="text" name="description" id="description" value="{{Request::old('description') ? : $tasks->description }}">
    </div>

        <br>
  <div class="control-form">

          <label for="task_date"> Description</label>
        <input type="date" name="task_date" id="task_date" value="{{Request::old('task_date') ? : $tasks->task_date }}">
    </div>

        <br>
                                
       
                                  <input type="submit" value="Save" />


                            </form>
                                
                           </div>
</div>
@endsection
