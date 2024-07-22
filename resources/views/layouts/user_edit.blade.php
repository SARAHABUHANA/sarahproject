<!-- resources/views/profile/edit.blade.php -->

@extends('layouts.app')
@section('content')
<div class="login2">
    <div class="login__content">
        <div class="login__img">
            <img src="{{ asset('img/Profile data-cuate.svg') }}" alt="">
        </div>

        <div class="login__forms" style="margin-top: 200px;width:390px">
            
<form action="{{ route('profile.update') }}" method="POST"  class="login__registre" id="login-in"   enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h1 class="login__title">تعديل بيانات المستخدم</h1>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('name', $user->name) }}" placeholder="اسم المستخدم "  type="text" name="name" id="name" required>
    </div>
  
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('email', $user->email) }}" placeholder="البريد الإلكتروني  "  type="email" name="email" id="email" required>
    </div>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('password', $user->password) }}" placeholder="  تغيير كلمة المرور "  type="password" name="password" id="password" required>
    </div>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('about', $user->about) }}" placeholder=" السيرة الذاتية  "  type="text" name="about" id="about" >
    </div>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('skill', $user->skill) }}" placeholder="المهارات  "  type="text" name="skill" id="skill" >
    </div>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('Specialty_name', $user->Specialty_name) }}" placeholder="  نوع المجال   "  type="text" name="Specialty_name" id="Specialty_name" >
    </div>
    <div class="login__box">
        <i class='bx bx-lock-alt login__icon'></i>
        <input class=" login__input"  value="{{ old('profile_picture', $user->profile_picture) }}" placeholder="  نوع المجال   "  type="file" name="profile_picture" id="Specialty_name" >
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