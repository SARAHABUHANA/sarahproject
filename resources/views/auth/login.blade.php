@extends('layouts.app')

@section('content')
<div class="login2">
    <div class="login__content">
        <div class="login__img">
            <img src="{{ asset('img/Computer login-cuate.svg') }}" alt="">
        </div>

        <div class="login__forms">
            <form  method="POST" action="{{ route('login') }}" class="login__registre" id="login-in">
                @csrf
           
                <h1 class="login__title">  تسجيل الدخول</h1>

                

                <div class="login__box">
                    <i class='bx bx-lock-alt login__icon'></i>
                    <input id="email" type="email" placeholder="  البريد الإلكتروني " class=" login__input @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني"  name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                </div>
         
                <div class="login__box">
                    <i class='bx bx-lock-alt login__icon'></i>
                    <input id="password" type="password" placeholder=" كلمة المرور " class=" login__input  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                     
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                   
                </div>
              
                <div>
                    <button type="submit" class="login__button"> تسجيل الدخول  </button>
                </div>
               
            </form>

        </div>
    </div>
</div>
@endsection


