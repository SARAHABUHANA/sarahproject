@extends('Admin.dashboard')

@section('content')



<h3>نظرة عامة</h3>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="counter blue">
                <div class="counter-icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="counter-content">
                    <h3>المشاريع الإبداعية </h3>
                    <span class="counter-value">313</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter red">
                <div class="counter-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="counter-content">
                    <h3>المبدعين</h3>
                    <span class="counter-value">295</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter purple">
                <div class="counter-icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="counter-content">
                    <h3>الشركات والمؤسسات </h3>
                    <span class="counter-value">313</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter yallow">
                <div class="counter-icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="counter-content">
                    <h3>المجالات الإبداعية</h3>
                    <span class="counter-value">313</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------->



<br>
<section>

<main class="table" id="customers_table">
    <section class="table__header">
        <h1>أحدث المشاريع </h1>
        
        
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> رقم المشروع</th>
                    <th>  صورة </th>
                    <th>  عنوان المشروع </th>
                    <th>   الوصف</th>
                    <th> المجال </th>
                    <th> رقم المستخدم  </th>
                    <th>اسم المستخدم  </th>
                    <th> تاريخ الاضافة  </th>
                    <th> تفاصيل </th>
                    <th> حذف </th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($projects as $project)
                <tr>
                    <td> {{ $project->id }}</td>
                    <td> <img src="{{ asset('images/'.$project->image) }}" alt=""></td>
                    <td> {{ $project->title }} </td>
                    <td>{{ $project->content }}</td>
                    <td>{{ $project->Specialty_name }}</td>
                    <td>{{ $project->user_id  }}</td>
                    <td>{{ $project->user->name  }}</td>
                
                    <td> <strong> {{ $project->created_at }} </strong></td>
                   <td> <p class="status more">more</p></td>
                   <td> <p class="status delete">delete</p></td>
                   
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </section>
</main>

        </section>


@endsection