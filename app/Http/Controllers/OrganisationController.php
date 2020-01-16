<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisation;
use App\User;


class OrganisationController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisation = Organisation::all();

        return view('organisation.index',compact('organisation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                 $user =User::all();
        return view('organisation.create',compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>  ['required', 'regex: /^[a-zA-Z ]*$/'],
            'address' =>  'required',
            'description' =>  'required',


        ]);


        $organisation = new Organisation;
         $user = new  User();

    $organisation->name = $request['name'];
     $organisation->address= $request['address'];
    $organisation->description= $request['description'];
     $organisation->user_id  = $request->input('user_id');
    $organisation->save();
    return redirect('/organisation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $users = User::orderBy('name','asc')->get();
        $organisation = Organisation::find($id);
        return view('organisation.show')->with([
           
            'organisation'=>$organisation,
            'users'=>$users
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisation = Organisation::find($id);

        return view('organisation.edit',compact('organisation'));
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

        $organisation = Organisation::find($id);
        $organisation->name = $request->input('name');
        $organisation->address = $request->input('address');
            $organisation->description= $request['description'];

        $organisation->status = $request->input('status');

        $organisation->save();
        return redirect('/organisation')->with('info','Selected salary has been updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        $organisation->delete();

        return back();
    }

 public function  getDeleteOrganisation($organisation_id) {
   $organisation = Organisation::find($organisation_id);
  $organisation->delete();
  return back();
}


public function editorganisation(Request $request, $id)
{

      $this->validate($request, [
        'name' =>  ['required', 'regex: /^[a-zA-Z ]*$/'],
        'address' =>  'required|min:6|max:50',
        'description' =>  'required|min:6|max:50',


        ]);   

    $organisation = Organisation::find($id);
    $organisation->name = $request->input('name');
    $organisation->address = $request->input('address');
    $organisation->description= $request['description'];
    $organisation->status = $request->input('status');

    $organisation->update();
    return redirect('organisation');
    
}

public function organisationmembers(Request $request,$id){
    $organisation = Organisation::all();
        $organisation->user_id  = $request->input('user');
  $organisation->update();
  return back();
}



}
