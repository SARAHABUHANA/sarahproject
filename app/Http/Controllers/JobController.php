<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;


class JobController extends Controller
{
    public function index($company)
{
    // تأكد من التحقق من الشركة والمعاملات الأخرى هنا

    $jobs = Job::where('company_id', $company)->get();
    return view('layouts.comp', compact('jobs'));
}

    public function create($company)
{
    // تأكد من التحقق من الشركة والمعاملات الأخرى هنا

    return view('layouts.addjob', compact('company'));
}
    public function store(Request $request, $company)
    {
        // تأكد من التحقق من البيانات والمعاملات الأخرى هنا
    
        $job = new Job;
        $job->company_id =$company;
        $job->title = $request->title;
        $job->about = $request->about;
        $job->Specialty_name = $request->Specialty_name;
        // أضف الأعمدة الأخرى هنا
        $job->save();
    
        return redirect()->back()->with('success', 'تمت إضافة فرصة العمل بنجاح');
    }
}
