@extends('layouts.admin')

@section('content')


            <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
        <a class="btn btn-danger pull-right" href="{{route('task.create')}}">
            Add Task
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
                            Task Name
                        </th>

                         <th>
                            Description                       
                          </th>
                          <th>
                            Status
                        </th>
                         <th>
                            Overdue
                        </th>
                        <th>
                            Action
                        </th>
      
                      
                    </tr>
                </thead>
                <tbody>
                     	@foreach($tasks as $tasks)

                     	 <tr data-entry-id="{{ $tasks->id }}">
                            
                            <td>

                                                     
                               {{$tasks->name}}
                            </td>

                        <td>

                                                     
                               {{$tasks->description}}
                            </td>

                              <td>

                                                     
                               {{$tasks->status}}
                            </td>


                             <td>

                                                     
                               {{$tasks->task_date}}
                            </td>

                               <td>
                                                                   @if(Auth::user() == $tasks->user)

          
                    <a href="{{route('task.edit',$tasks->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>

                    

                     <a href="{{ route('task.delete',['task_id' => $tasks->id]) }}"  class="btn btn-danger" ><i class="fas fa-trash"></i></a>
                     @endif




           
           </td>
                        </tr>

                         @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>



@endsection