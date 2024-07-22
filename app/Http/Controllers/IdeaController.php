<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
class IdeaController extends Controller
{

    
    public function index()
    {
       
        $ideas = Idea::orderBy('created_at', 'desc')->get();
        return view('admin.idea', compact('ideas'));
    }
    public function create()
    {
        return view('admin.idea');
    }


    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $idea = new Idea;
    $idea->title = $request->title;
    $idea->description = $request->description;
    $idea->save();

    return redirect()->route('ideas.index')->with('success', 'Idea added successfully.');
}

public function update(Request $request, Idea $idea)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $idea->title = $request->title;
    $idea->description = $request->description;
    $idea->save();

    return redirect()->route('dashboard')->with('success', 'Idea updated successfully.');


}


public function destroy(Idea $idea)
{
    $idea->delete();

    return redirect()->route('ideas.index')->with('success', 'Idea deleted successfully.');
}

}