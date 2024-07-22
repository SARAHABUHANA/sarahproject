<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Training;

class TrainingController extends Controller
{
    public function store(Request $request, $company)
    {
        // تأكد من التحقق من البيانات والمعاملات الأخرى هنا
    
        $training = new Training;
        $training->company_id = $company;
        $training->title = $request->title;
        $training->about = $request->about;
        $training->Specialty_name = $request->Specialty_name;
        // أضف الأعمدة الأخرى هنا
        $training->save();
    
        return redirect()->back()->with('success', 'تمت إضافة فرصة العمل بنجاح');
    }
}
