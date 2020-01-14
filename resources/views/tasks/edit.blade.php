
@extends('layouts.admin')

@section('content')



<div class="card">
    
 <div class="card-body">
<div class="panel-heading">Task</div>
 <div class="panel-body">
<form class="form-horizontal" action="/task/{{$tasks->id}}" method="post" style="width:1500px; margin-right:auto; margin-left:auto;">
  {{ csrf_field() }}
{{ method_field('PATCH') }}

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{Request::old('name') ? : $tasks->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Task Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{Request::old('description') ? : $tasks->description }}" >

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('task_date') ? ' has-error' : '' }}">
                            <label for="task_date" class="col-md-4 control-label">Task Date</label>

                            <div class="col-md-6">
                                <input id="task_date" type="date" class="form-control" name="task_date" value="{{Request::old('task_date') ? : $tasks->task_date }}"  required autofocus>

                                @if ($errors->has('task_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Task Status</label>

                            <div class="col-md-6">
                                <div class="col-md-6">
                                  <select name="status" class="form-control">
                               <option>pending</option>
                            <option>completed</option>
                            
                            </select>
                                @if ($errors->has('task_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     




  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Submit
                                </button>
                            </div>
                        </div>
                        
                        </form>
</div>
</div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>

</div>
            </div>
        </div>
    </div>
</div>

@endsection
