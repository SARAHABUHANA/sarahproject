<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingSession;


class TrainingSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  $sessions = TrainingSession::all();
       return view('admin.Tsessions' , compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createsession');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'Specialty_name' => 'required',
            'video' => 'required|file|mimes:mp4,mov,ogg,qt | max:20000',
            'trainer' => 'required',
            'date' => 'required',
        ]);

        
        $videoFile = $request->file('video');
        $videoFileName = time() . '.' . $videoFile->getClientOriginalExtension();
        $videoFile->storeAs('public/videos', $videoFileName);

        $trainingSession = new TrainingSession;
        $trainingSession ->title = $request->input('title');
        $trainingSession ->descriptione = $request->input('description');
        $trainingSession ->trainer = $request->input('trainer');
        $trainingSession ->Specialty_name = $request->input('Specialty_name');
        $trainingSession ->date = $request->input('date');
        $trainingSession ->video = $videoFileName;
        $trainingSession->save();
           

        return back()->with('success', 'تم حفظ الورشة التدريبية بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  $session = TrainingSession::findOrFail($id);
        return view('admin.sassion_edit', compact('session','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'Specialty_name' => 'required',
        'video' => 'required|url',
        'trainer' => 'required',
        'date' => 'required',

    ]);

    $session->update($request->all());

    return redirect()->route('training-sessions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {  $session = TrainingSession::findOrFail($id);
        
        $session->delete();

        return redirect()->route('training-sessions.index');
    }
}
