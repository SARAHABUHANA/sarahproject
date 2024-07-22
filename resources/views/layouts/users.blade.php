@extends('layouts.app')
@vite(['resources/css/users.css'])

@section('content')

<div class="profile-container">
    @foreach ($users as $user)
    <div class="profile-card">
       <div class="profile-img"><img src="{{ asset('images/'.$user->profile_picture) }}" alt="Profile Picture">  </div>                
         <div class="profile-name">{{ $user->name }}</div>
         <div class="spec">{{ $user->Specialty_name }}</div>
      <div class="profile-position">
        <a  href="{{ route('users.show', $user->id) }}" class="msg-btn"  >   الملف الشخصي  </a>
        

        </div>
    
      
    </div>
   

    
    @endforeach
  </div>
 
@endsection