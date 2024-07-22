

@extends('layouts.app')
@section('content')
<div class="login2">
    <div class="login__content">
        <div class="login__img">
            <img src="{{ asset('img/Editing body text-pana.svg') }}" alt="">
        </div>

        <div class="login__forms" style="margin-top: 200px;width:390px">
            
<form action="{{ route('projects.update', $project->id) }}" method="POST"  class="login__registre" id="login-in"   enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h1 class="login__title">تعديل بيانات المشروع </h1>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('title', $project->title) }}" placeholder="عنوان المشروع   "  type="text" name="title" id="title" required>
    </div>
  
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('content', $project->content) }}" placeholder="وصف المشروع "  type="text" name="content" id="content" required>
    </div>
  
    
    
   
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('Specialty_name', $project->Specialty_name) }}" placeholder="  نوع المجال   "  type="text" name="Specialty_name" id="Specialty_name" >
    </div>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('image', $project->profile_picture) }}" placeholder=" تعديل صورة المشروع "  type="file" name="image" id="image" >
    </div>



    <button type="submit" class="login__button">حفظ التتغيرات </button>
</form>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif


        </div>
    </div>
</div>




@endsection