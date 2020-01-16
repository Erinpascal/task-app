@extends('layouts.admin')

@section('content')
<div class="card">
    
 <div class="card-body">
<div class="panel-heading">Create Organisation</div>
 <div class="panel-body">
<form class="form-horizontal" action="{{ route('organisation.store') }}" method="post" style="width:1500px; margin-right:auto; margin-left:auto;">
  {{ csrf_field() }}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Organisation's Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label"> Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" >

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Description</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <!-- <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required> -->
        <textarea type="text" class="form-control" name="description" id="validationCustomUsername" placeholder="description" aria-describedby="inputGroupPrepend" required></textarea>

        <div class="invalid-feedback">
          Description
        </div>
      </div>

      <div class="form-group col-md-6">
      <label for="inputState">Category</label><br>
      <select  class="form-control" name="user_id"><br>
      <option selected>Choose...</option><br>
      @foreach ($user as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
         @endforeach

      </select>
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