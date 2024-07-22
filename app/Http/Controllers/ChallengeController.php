<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Challenge;
use App\Models\Projectchallenge;
class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $challenges = Challenge::all(); // جلب جميع التحديات
        return view('admin.challeng', compact('challenges')); 


    }



    // في ChallengeController.php

public function last()
{
    $challenges = Challenge::orderBy('created_at', 'desc')->take(1)->get();
     // استخدم latest() للحصول على التحديات بالترتيب الزمني وtake(3) للحصول على 3 تحديات أخرى
    return view('layouts.challenge', compact('challenges'));
}

public function show($id)
{
    $challenge = Challenge::with('projectchallenges')->find($id);
  

    return view('layouts.challenge', compact('challenge'));
}
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.challeng');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'Specialty_name' => 'required',
            'Award' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
    
        $challenge = new Challenge();
    $challenge->title = $request->input('title');
    $challenge->description = $request->input('description');
    $challenge->Specialty_name = $request->input('Specialty_name');
    $challenge->Award = $request->input('Award');
    $challenge->start_date = $request->input('start_date');
    $challenge->end_date = $request->input('end_date');
    $challenge->save();
    
        return redirect()->route('challenges.index')->with('success', 'Idea added successfully.');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $challenge = Challenge::find($id);
        if ($challenge) {
            return view('admin.editchalleng', compact('challenge'));
        }
        return redirect()->back()->with('error', 'لم يتم العثور على التحدي');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            // أضف القواعد الأخرى للحقول الأخرى هنا
        ]);
    
        $challenge = Challenge::find($id);
        if ($challenge) {
            $challenge->title = $request->title;
            // قم بتحديث الحقول الأخرى هنا
            $challenge->save();
            return redirect()->back()->with('success', 'تم تحديث التحدي بنجاح');
        }
        return redirect()->back()->with('error', 'لم يتم العثور على التحدي');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
            $challenge = Challenge::find($id);
            if ($challenge) {
                $challenge->delete();
                return redirect()->back()->with('success', 'تم حذف التحدي بنجاح');
            }
            return redirect()->back()->with('error', 'لم يتم العثور على التحدي');
        }
    }

