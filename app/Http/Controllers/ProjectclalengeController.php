<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projectchallenge;
use App\Models\Challenge;
use Auth;
class ProjectclalengeController extends Controller
{
    public function create()
    {
        $challenges = Challenge::orderBy('created_at', 'desc')->take(1)->get();
        
        return view('layouts.addproject', compact('challenges'));
    }


public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        
        'image' => 'nullable|image|max:2048', // تحقق من صورة المشروع
    ]);

  
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    $project = new Projectchallenge;
    $project->user_id = auth()->id();
    $project->challenge_id = $request->challenge_id;
    $project->title = $request->title;
    $project->description = $request->description;
   
    $project->image = $imageName;// حفظ مسار الصورة
    $project->save();
    return redirect()->route('last.challenge')->with('success', 'تم رفع المشروع بنجاح');

  
}

}
