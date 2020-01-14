<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

	public function admin(){
        
     return view('admin.index');
        }
        
        }
        
