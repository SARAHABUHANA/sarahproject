@extends('Admin.dashboard')

@section('content')
<div class="idea">
<div class="ideaform challengform  " >
    
    <img  src="{{ asset('img/Course app-pana.svg') }}" width="150px"  height="150px"  >
    <p class="sign challeng " align="center">  الورشات التدريبية   </p>

    <p class="des" align="center">إضافة ورشة تدريبية   </p>
    <form class="form1" action="{{ route('training-sessions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <input  class="un " type="text"  id="title" name="title" placeholder="العنوان "  required>
      <input  class="un " type="text"  id="Specialty_name" name="Specialty_name" placeholder="المجال الإبداعي  "  required>
      <input  class="un " type="text"  id="description" name="description" placeholder="المحتوى "  required>
      <input  class="un " type="text"  id="trainer" name="trainer" placeholder="المدرب  "  required>
      <input  class="un " type="date"  id="date" name="date" placeholder=" تاريخ الورشة  "  required>
      <input  class="un " type="file"  id="video" name="video" placeholder=" فيديو الورشة   "  required>
     
      <button type="submit" class="submit"  > إضافة الورشة </button>
    
    </form>
                
    </div>
</div>
@endsection