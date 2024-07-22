<!-- resources/views/admin/ideas/create.blade.php -->

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
    
          </form> 
                
    </div>
    <div class="ideatable" id="ideatable">
      <main class="table  " style=" width: 100%;height:900px; " id="customers_table">
        <section class="table__header">
            <h1> قائمة التحديات </h1>
            
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                      <th>  صورة </th>
                        <th> Id</th>
                        
                        <th> العنوان</th>
                        <th> المحتوى </th>
                        <th> تاريخ البداية </th>
                        <th> تاريخ النهاية </th>
                       
                        <th> تعديل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>
                
                  @foreach ($challenges as $challenge)
                    <tr>
                      <td> <img src="{{ asset('img/Problem solving-bro.svg') }}" alt=""></td>
                        <td> {{$challenge->id}} </td>
                      
                        <td> {{ $challenge->title }}  </td>
                       
                        <td>{{ $challenge->description }}</td>
                        <td>{{ $challenge->start_date }}</td>
                        <td>{{ $challenge->end_date }}</td>
                        
                       <td> 
                        <a href="{{ route('challenges.edit', $challenge->id) }}" class="status more">تعديل</a></td>
                        <td><form action="{{ route('challenges.destroy', $challenge->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="status delete">حذف</button>
                      </form></td>
                       
                       
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </section>
    </main>
      
       
     </div>



    
</div>
@endsection
