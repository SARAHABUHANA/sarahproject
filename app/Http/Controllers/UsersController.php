<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function index()
    {
        $users=User::all();
       
        return view ('layouts.users',compact('users'));
    }

   

  
    public function usertable()
    {
        $users=User::all();
       
        return view ('admin.dashboard',compact('users'));
    }
    public function show($id)
{
    
    $user = User::findOrFail($id);
    return view('layouts.usersprofile', compact('user'));
}
public function showProfile()
{
    $user = auth()->user();

    if ($user->user_type == 'company') {
        return view('company.profile');
    } else {
        return view('user.profile');
    }
}


}
