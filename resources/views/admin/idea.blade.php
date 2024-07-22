<!-- resources/views/admin/ideas/create.blade.php -->

@extends('Admin.dashboard')

@section('content')
<div class="idea">
<div class="ideaform">
    
    
    <p class="sign" align="center">  pointlight  <img  src="{{ asset('img/Light bulb-bro.svg') }}" width="130px"  height="70px"  > </p>

    <p class="des" align="center">   إضافة فكرة ,اقتباس , سؤال </p>
    <form class="form1" action="{{ route('admin.ideas.store') }}" method="POST">
        @csrf
      <input  class="un " type="text"  id="title" name="title" placeholder="العنوان "  required>
      <input  class="un " type="text"  id="description" name="description" placeholder="المحتوى "  required>
      <button type="submit" class="submit" >إضافة </button>
    
           
                
    </div>
 <div class="ideatable" id="ideatable">
  <main class="table  " style=" width: 100%;" id="customers_table">
    <section class="table__header">
        <h1> قائمة الأفكار </h1>
        
        
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                  <th>  صورة </th>
                    <th> Id</th>
                    
                    <th> العنوان</th>
                    <th> المحتوى </th>
                    <th> تاريخ الإضافة </th>
                   
                    <th> تعديل  </th>
                    <th> حذف </th>
                </tr>
            </thead>
            <tbody>
            
              @foreach ($ideas as $idea)
                <tr>
                  <td> <img src="{{ asset('img/Light bulb-bro.svg') }}" alt=""></td>
                    <td> {{ $idea->id }} </td>
                  
                    <td> {{ $idea->title }} </td>
                   
                    <td>{{ $idea->description }}</td>
                    <td>{{ $idea->created_at }}</td>
                    
                   <td>  <a class="status more" href="{{ route('user.details', $idea->id) }}">تعديل </a></td>
                   <td><form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="status delete">حذف</button>
                </form>
              </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </section>
</main>
  
   
 </div>
</div>
@endsection
