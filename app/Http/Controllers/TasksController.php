<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('tasks.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
    $task->name = $request['name'];
     $task->description = $request['description'];
    $task->task_date = $request['task_date'];
    $task->user_id = request()->user()->id;
    $task->save();
    return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::find($id);
    return view('tasks.edit')->with('tasks',$tasks);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $tasks = Task::find($id);
        $tasks->name = $request->input('name');
        $tasks->description = $request->input('description');
        $tasks->task_date = $request->input('task_date');
        $tasks->update();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tasks = Task::find($id);
        $tasks->delete();
        return back();
    }


    public function  getDeleteTask($task_id) {
  $tasks = Task::where('id', $task_id)->first();
  if(Auth::user() !=$tasks->user){
    return redirect()->back();
  }
  $tasks->delete();
  return back();
}
}
