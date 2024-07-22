<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Vot;



class VoteController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $vote = new Vote;
        $vote->project_id = $project->id;
        $vote->user_id = auth()->user()->id; // استخدم المستخدم المسجل حاليا
        $vote->vote = $request->vote; // استخدم القيمة المرسلة من النموذج
        $vote->save();

        return redirect()->back()->with('success', 'تم إضافة التصويت بنجاح');
    }
    public function determineWinner()
{
    $projects = Project::withCount('votes')->get();
    $winner = $projects->sortByDesc(function ($project) {
        return $project->votes_count;
    })->first();

    return view('winner', compact('winner'));
}

public function show(Project $project)
{
    $votes = Vote::where('project_id', $project->id)->get();
    return view('votes.show', compact('votes'));
}
}
