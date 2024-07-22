

@extends('layouts.app')
@section('content')
<div class="login2">
    <div class="login__content">
        <div class="login__img">
            <img src="{{ asset('img/Writerpana.svg') }}" alt="">
        </div>

        <div class="login__forms">
            @foreach($challenges as $challenge)
                    
            <form action="{{ route('projectschallenge.store') }}" method="POST"  class="login__registre" id="login-in" enctype="multipart/form-data">
                @csrf
                <h1 class="login__title">    إضافة مشروع إلى تحدي </h1>
                <div class="login__box">
                    <i class='bx bx-lock-alt login__icon'></i>
                    <input class=" login__input" placeholder=" عنوان المشروع"  type="text" name="title" id="title" required>
                </div>
                
                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                    <input class=" login__input"  placeholder=" وصف المشروع" name="description" id="description" required>
                </div>
                <div class="login__box">
                    <i class='bx bx-lock-alt login__icon'></i>
                 
                    <input class=" login__input"  placeholder="  نوع المجال " name="Specialty_name" id="Specialty_name" required>
                </div>
                <div>

                    <input  class=" custom-file-input " placeholder=" رفع الملف" type="file" name="image" id="image" required>
                </div>
                
                    
                <input  class=" login__input" type="hidden" name="challenge_id" value="{{ $challenge->id }}">
                
                <button type="submit" class="login__button">رفع المشروع</button>
                @endforeach
            </form>

        </div>
    </div>
</div>
@endsection


