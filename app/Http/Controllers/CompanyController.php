<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Auth;




class CompanyController extends Controller
{
    public function show($company)
{  
    $company = Company::findOrFail($company);
    $jobs = Job::where('company_id', $company->id)->get();
    return view('layouts.comp', compact('company', 'jobs'));

}

  
    
    public function create()
{
    $user = auth()->user();
    if ($user->company) {
        
        return redirect()->route('companies.show');
    }
    return view('layouts.add_company');
}
    
public function store(Request $request)
{

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'Specialty_name' => 'required',
        
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',// تحقق من صورة المشروع
    ]);

  
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    $company = new Company;
    $company->user_id= auth()->user()->id;
    
    $company->name = $request->name;
    $company->Specialty_name = $request->Specialty_name;
   
    $company->description = $request->description;
   
    $company->image = $imageName;// حفظ مسار الصورة
    $company->save();
    session(['last_created_company_id' => $company->id]);
    $companyId = session('last_created_company_id');
    return redirect()->route('companies.show', ['company' => $companyId])->with('success', 'تم رفع المشروع بنجاح');

}

}
