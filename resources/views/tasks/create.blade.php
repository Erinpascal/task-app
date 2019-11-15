@extends('layouts.app')

@section('content')
<<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Task</div>
                <div class="panel-body">
<form class="form-horizontal" action="{{ route('tasks.store') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

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
                                <input id="task_date" type="date" class="form-control" name="task_date" value="{{ old('task_date') }}" required autofocus>

                                @if ($errors->has('task_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('task_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     




  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                        
                        </form>
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