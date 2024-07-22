<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Project;
use App\Models\User;
use App\Models\Comment;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    public function index()
    {
        $projects = Project::all();
        return view('/home', compact('projects'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
    
      
}
