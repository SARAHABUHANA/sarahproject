<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Projectchallenge;
class AdminController extends Controller
{
   //جدول المستخدمين 
    public function users()
    {
        $users = User::all(); // استرجاع جميع المستخدمين
        return view('admin.users', compact('users')); // تمرير المستخدمين إلى العرض
    }
  ///----------------------------------


 //تفاصيل المستخدم في صفحة منفصلة   
    public function showUser($id)
{
    $user = User::findOrFail($id);
    return view('admin.user_details', compact('user'));
}
///----------------------------------

///---------------حذف مستخدم-------------------
public function deleteUser($id)
{
    $user = User::find($id);
$user->projects()->delete();
$user->projectchallenges()->delete();
$user->delete();
    return view('admin.users')->with('success', 'User deleted successfully');
}
///----------------------------------

public function latestProjects()
{
    $projects = Project::orderBy('created_at', 'desc')->take(10)->get();
    return view('admin.home', compact('projects'));
}

public function Projects()
{
    $projects = Project::all(); // استرجاع جميع المشاريع
    return view('admin.projects', compact('projects')); // تمرير المشاريع إلى العرض
}
public function showProject($id)
{
    $project = Project::findOrFail($id);
    return view('admin.project_details', compact('project'));
}

public function deleteProject($id)
{
    $project = Project::findOrFail($id);
    $project->delete();
    return redirect()->route('projects')->with('success', 'Project deleted successfully');
}



}
