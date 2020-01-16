
@extends('layouts.admin')

@section('content')



<div class="card">
    
 <div class="card-body">
<div class="panel-heading">Assign {{$users->name}}</div>
 <div class="panel-body">
<form action="{{ route("user.update", [$users->id]) }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
{{ method_field('PATCH') }}
 

  


                      

                      

     <div class="form-group col-md-6">
      <label for="inputState">Organisation</label><br>
      <select id="inputState" class="form-control" name="organisation_id"><br>

      <option selected value="0" >Unassign</option><br>
      @foreach ($organisation as $organisation)

  

      <option value="{{$organisation->id}}"  {{old('organisation') ? 'selected' : '' }}>{{$organisation->name}}</option>
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
