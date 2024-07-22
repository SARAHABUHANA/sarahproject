@extends('Admin.dashboard')

@section('content')
<div class="idea">
<div class="ideaform challengform  " >
    
    <img  src="{{ asset('img/Problem solving-bro.svg') }}" width="150px"  height="150px"  >
    <p class="sign challeng " align="center">  التحديات  </p>

    <p class="des" align="center">إضافة تحدي  </p>
    <form class="form1" action="{{ route('admin.challeng.store') }}" method="POST">
        @csrf
      <input  class="un " type="text"  id="title" name="title" placeholder="العنوان "  required>
      <input  class="un " type="text"  id="Specialty_name" name="Specialty_name" placeholder="المجال الإبداعي  "  required>
      <input  class="un " type="text"  id="description" name="description" placeholder="المحتوى "  required>
      <input  class="un " type="text"  id="Award" name="Award" placeholder="الجائزة "  required>
      <input  class="un " type="date"  id="start_date" name="start_date" placeholder="بداية التحدي "  required>
      <input  class="un " type="date"  id="end_date" name="end_date" placeholder="نهاية التحدي "  required>
      <button type="submit" class="submit" >إضافة </button>
    
           
                
    </div>
    @endsection