@extends('layouts.app')

@section('content')
<<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Organisation Information</div>
                <div class="panel-body">


  <form class="form-horizontal" role="form" method="POST" action="{{ route('organisation.update', ['id' => $organisation->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{Request::old('name') ? : $organisation->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Organisation's address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{Request::old('address') ? : $organisation->address }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="status" class="col-md-4 control-label">Organisation's status</label>
                            <select name="status" class="form-control">
                               <option>pending</option>
                            <option>completed</option>
                            
                            </select>
                           
                            
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