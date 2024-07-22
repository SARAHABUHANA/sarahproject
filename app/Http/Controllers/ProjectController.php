<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Comment;
use Auth;

class ProjectController extends Controller
{
    public function index()
{
    $projects = Project::all();
    return view('/home', compact('projects'));
}
public function show($id)
{
    $project = Project::findOrFail($id);
    return view('layouts.singleproj', compact('project'));
}
public function showcomment($projectId)
{
    $project = Project::findOrFail($projectId);
    $comments = $project->comments;
    return view('layouts.singleproj', compact('comments','project'));
}

    public function create()
{
    return view('layouts.creatproject');
}
public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

       // رفع الصورة وتخزينها في مجلد معين
      
       $imageName = time().'.'.$request->image->extension();  
       $request->image->move(public_path('images'), $imageName);

    $project = new Project;
  
    $project->title = $request->input('title');
    $project->user_id = auth()->id(); 
    
  
    $project->content = $request->input('content');
    $project->Specialty_name = $request->input('Specialty_name');
    $project->image = $imageName;
    $project->save();

    return back()->with('success', 'تم إضافة المشروع بنجاح.');
}
public function design()
{
    $projects = Project::where('Specialty_name', 'تصميم وتطوير الويب')->get();
    return view('/home', compact('projects'));
}

public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('layouts.project_edit', compact('project'));
}


public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        $project->image = $name;
    }   
    $project->update($request->all());
    
    
    return redirect()->route('users.profile', $project->user_id);
    
}
public function destroy($id)
{
    $project = Project::findOrFail($id);
    $project->delete();
   
    return redirect()->route('users.profile');
}

public function showComments($id)
{
    $comments = Comment::where('project_id', $id)->get();
    return view('project.show', compact('comments'));
}
}
