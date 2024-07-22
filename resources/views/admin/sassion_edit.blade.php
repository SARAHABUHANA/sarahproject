@extends('Admin.dashboard')

@section('content')
<div class="idea">
<div class="ideaform challengform  " >
    
    <img  src="{{ asset('img/Course app-pana.svg') }}" width="150px"  height="150px"  >
    <p class="sign challeng " align="center">  الورشات التدريبية   </p>

    <p class="des" align="center"> تعديل ورشة تدريبية   </p>
    <form class="form1" action="{{ route('training-sessions.update', $session->id) }}" method="POST">
        @csrf
        @method('PUT')
      <input  class="un " type="text" value="{{ $session->title }}" id="title" name="title" placeholder="العنوان "  required>
      <input  class="un " type="text" value="{{ $session->Specialty_name  }}" id="Specialty_name" name="Specialty_name" placeholder="المجال الإبداعي  "  required>
      <input  class="un " type="text" value="{{ $session->description  }}" id="description" name="description" placeholder="المحتوى "  required>
      <input  class="un " type="text"   value="{{ $session->trainer }}" id="trainer" name="trainer" placeholder="المدرب  "  required>
      <input  class="un " type="date" value="{{ $session->date }}" id="date" name="date" placeholder=" تاريخ الورشة  "  required>
      <input  class="un " type="file" value="{{ $session->video }}" id="video" name="video" placeholder=" فيديو الورشة   "  required>
     
      <button type="submit" class="submit"  > تعديل الورشة </button>
    
           
                
    </div>
</div>
@endsection