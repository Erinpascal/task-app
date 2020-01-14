@extends('layouts.admin')
@section('content')

{{$organisation->name}}<br>
{{$organisation->address}}<br>
{{$organisation->description}}<br>
<hr>
Organisation Members

 <form action="/home/{{$users->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
 <div class="form-group col-md-6">
      <label for="inputState">Category</label><br>
      <select id="inputState" class="form-control" name="user_id"><br>
      <option selected>Choose...</option><br>
      @foreach ($users as $users)
      <option value="{{$users->id}}">{{$users->name}}</option>
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




@endsection