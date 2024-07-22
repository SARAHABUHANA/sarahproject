<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class ProfileController extends Controller
{
    public function show(){
        $user = auth()->user();
        return view ('layouts.profile',compact('user'));
        
    }

    public function showProjects($id)
    {
        $user = User::with('projects')->find($id);
        return view('layouts.profile', compact('user'));
    }
    public function edit()
        {
            $user = auth()->user();
            return view( 'layouts.user_edit', compact('user'));
        }
        public function update(Request $request, User $user)
        {
            $user = User::find(auth()->id()); // أو استخدم المستخدم المراد تحديث عدد المشاريع له
            $user->numproject = $user->projects()->count();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->about = $request->input('about');
            $user->skill = $request->input('skill');
         
            $user->Specialty_name = $request->input('Specialty_name');
            
            if ($request->hasFile('profile_picture')) {
                $image = $request->file('profile_picture');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
        
                $user->profile_picture = $name;
            }
        
           
            
            $user->save();
           
            return redirect('/profile')->with('success', 'Profile updated successfully!');
        }
    
    
    
      

}
