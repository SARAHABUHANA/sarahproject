@extends('layouts.app')
@vite(['resources/css/single.css','resources/css/users.css'])
@section('content')
<div class="card2">
  <img  class="card__image" src="{{ asset('images/'.$company->image) }}" alt="{{ $company->name }}">  
  <div class="card__content">
    <time datetime="2021-03-30" class="card__date">{{ $company->created_at }}</time>
    <span class="card__title">{{ $company->name }}<span>
      <br>
      <span class="card__title">{{ $company->Specialty_name }}<span>
        <br>
      <span class="card__title">{{ $company->description }}<span>
        <br>
  </div>
  
 
</div>
<div class="company">
<div class="two">
  <h1>  فرص العمل  
    <span>   فرص العمل التي تم إضافتها من قبل الشركة  </span>
  </h1>
</div>
<br>
<div class="profile-container">
  @foreach($jobs as $job)

  <div class="profile-card">
     <div class="profile-img"><img src="{{ asset('img/Job offers-bro.svg')}}" alt="Profile Picture">  </div>                
       <div class="profile-name">{{ $job->title }}</div>
       <div class="spec">{{ $job->Specialty_name }}</div>
       <div class="spec">{{ $job->description  }}</div>
    <div class="profile-position">
      <a  href="" class="msg-btn"  >   تفاصيل   </a>
      

      </div>
  
    
  </div>
 

  <br>
  @endforeach
</div>
<div class="login2">
  <div class="login__content">
      <div class="login__img">
          <img src="{{ asset('img/Job offers-cuate.svg') }}" alt="">
      </div>

      <div class="login__forms">
          <form action="{{ route('jobs.store', ['company' => $company->id]) }}"  method="POST"  class="login__registre" id="login-in" enctype="multipart/form-data">
              @csrf
              <h1 class="login__title">    إضافة فرصة عمل  </h1>
              <div class="login__box">
                  <i class='bx bx-lock-alt login__icon'></i>
                  <input class=" login__input" placeholder=" العنوان "  type="text" name="title" id="title" required>
              </div>
              
                  <div class="login__box">
                      <i class='bx bx-lock-alt login__icon'></i>
                  <input class=" login__input" type="text" placeholder=" ماهي الفرصة ؟" name="about" id="about" required>
              </div>
              <div class="login__box">
                  <i class='bx bx-lock-alt login__icon'></i>
               
                  <input class=" login__input" type="text" placeholder="  نوع المجال " name="Specialty_name" id="Specialty_name" required>
              </div>
              
              
                  
              
              
              <button type="submit" class="login__button"> رفع </button>
             
          </form>

      </div>
  </div>
</div>
</div>




@endsection