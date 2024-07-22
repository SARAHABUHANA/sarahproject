@extends('layouts.app')
@vite(['resources/css/challenge.css'])
@section('content')
<section class="hero" id="hero">
    <div class="bg">
      <div class="opacity">
      <div class="imag">
        <div class="img">
          
        </div>
      </div>
      <div class="text">
      
        <div class="text1">
       <h1> تحدّي جديد ! : اكتشف قدراتك المخفية </h1>
    </div>
     

    
      @foreach($challenges as $challenge)
      <div class="info">
        <div class=" inf">
            <h5>{{ $challenge->title }}</h5>
            <label >عنوان التحدي </label>
        </div>
        <div class="inf">
            <h5>{{ $challenge->Specialty_name }}</h5>
            <label > المجال  </label>
        </div>
        <div class="inf inf1">
          <div class="des"><h5>{{ $challenge->description }}</h5></div>
            <div class="des2"> مالمطلوب  </div>
        </div>
        <div class="inf">
            <h5>{{ $challenge->Award }}</h5>
            <label > الجائزة المقابلة </label>
        </div>
        <div class="inf">
            <h5>{{ $challenge->end_date}}</h5>
            <label >  ينتهي التحدي بتاريخ  </label>
        </div>
       </div>
       @endforeach
   <a   class="add"   href="{{ route('projectschallenge.create') }}">اضافة مشروع</a>
  
      </div>
    </div>
    </div>
    </div>
  </section>
  <br><br>
  <div class="container">
    <div class="two">
        <h1> المشاريع الإبداعية 
          <span>المشاريع التي إضافتها للتحدي  </span>
        </h1>
      </div>
      
    <div class="projects">
  
       @foreach ($challenge->projectchallenges as $projectchallenge)
       <div class="card-list">
        <article class="card3">
            <div class="first">
                <a href="userprofile">{{ $projectchallenge->user->name }}</a>
            <div class="card-meta ">
                <img src="{{ asset('images/'.$projectchallenge->user->profile_picture) }}">
                
            </div>
         
        </div>
        <div class="card-image">
            <img src="{{ asset('images/'.$projectchallenge->image) }}" alt="An orange painted blue, cut in half laying on a blue background" />
        </div>
        <div class="card-header">
           
          
          
            <button class="icon-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Heart">
                    <path d="M7 3C4.239 3 2 5.216 2 7.95c0 2.207.875 7.445 9.488 12.74a.985.985 0 0 0 1.024 0C21.125 15.395 22 10.157 22 7.95 22 5.216 19.761 3 17 3s-5 3-5 3-2.239-3-5-3z" />
                </svg>
    
            </button>
            <a href="#">{{ $projectchallenge->title }}</a>
           
        </div>
        <br>
        <p  class ="p2"href="#">{{ $projectchallenge->description }}</p>
        <div class="card-footer">
          
            <div class="card-meta">
                {{ $projectchallenge->created_at }}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" display="block" id="Calendar">
                    <rect x="2" y="4" width="20" height="18" rx="4" />
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                    <path d="M2 10h20" />
                </svg>
                
            </div>
        </div>
    </article>
    </div>
    
   
    @endforeach

</div>


  @endsection