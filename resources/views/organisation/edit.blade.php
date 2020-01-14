
@extends('layouts.admin')

@section('content')



<div class="card">
    
 <div class="card-body">
<div class="panel-heading">Create Organisation</div>
 <div class="panel-body">
<form class="form-horizontal" action="/organisation/{{$organisation->id}}" method="post" style="width:1500px; margin-right:auto; margin-left:auto;">
  {{ csrf_field() }}
{{ method_field('PATCH') }}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Organisation Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{Request::old('name') ? : $organisation->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Organisation Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{Request::old('address') ? : $organisation->address }}" >

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
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
