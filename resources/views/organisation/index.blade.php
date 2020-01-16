@extends('layouts.admin')

@section('content')


    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
        <a class="btn btn-danger pull-right" href="{{route('organisation.create')}}">
            Add Organisation
            </a>
        </div>
    </div>
<div class="card">
    

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Product">
                <thead>
                    <tr>
                       
                        <th>
                            Organisation Name
                        </th>

                         <th>
                            Organisation Address                       
                          </th>
                         
                        <th>
                            Action
                        </th>
      
                      
                    </tr>
                </thead>
                <tbody>
                      @foreach($organisation as $organisation)
                       <tr data-entry-id="{{ $organisation->id }}">
                            
                            <td>

                                                     
                               {{$organisation->name}}
                            </td>

                        <td>

                                                     
                               {{$organisation->address}}
                            </td>

                            

                               <td>
          
                    <a href="{{route('organisation.edit',$organisation->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    <a href="{{route('organisation.show',$organisation->id)}}"  class="btn btn-warning" ><i class="fas fa-eye"></i></a>

                    
                    <!-- <a href="{{ route('organisation.delete',['organisation_id' => $organisation->id]) }}"  class="btn btn-danger" ><i class="fas fa-trash"></i></a> -->
                   
                    <form action="{{ route('organisation.destroy', $organisation->id) }}" method="POST"  style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>


           
           </td>
                        </tr>

                         @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>



@endsection