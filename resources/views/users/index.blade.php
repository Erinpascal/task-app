@extends('layouts.admin')

@section('content')


    
    

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Product">
                <thead>
                    <tr>
                       
                        <th>
                            Name
                        </th>

                         <th>
                            Email                      
                          </th>

                          
                         
                        <th>
                            Action
                        </th>
      
                      
                    </tr>
                </thead>
                <tbody>
                      @foreach($users as $user)
                       <tr >
                            
                            <td>

                                                     
                               {{$user->name}}
                            </td>

                        <td>

                                                     
                               {{$user->email}}
                            </td>

                            

                            

                               <td>
          
                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>

                   <!--  <a href="{{route('user.show',$user->id)}}"  class="btn btn-warning" ><i class="fas fa-eye"></i></a> -->

                    
      



           
           </td>
                        </tr>

                         @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>



@endsection