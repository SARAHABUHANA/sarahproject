@extends('Admin.dashboard')

@section('content')

<a 
href="{{ route('training-sessions.create') }}" class="seession_btn">إضافة ورشة تدريبية</a>




<section class="sec">

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1> قائمة الورشات التدريبية  </h1>
            
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id</th>
                        <th>  صورة </th>
                        <th> عنوان الورشة   </th>
                        <th>  الوصف</th>
                        <th> المجال </th>
                        <th> المدرب </th>
                        <th>  محتوى تفاعلي  </th>
                       
                        <th> تاريخ الورشة  </th>
                        <th>    تعديل    </th>
                       
                        <th>    حذف   </th>
                      
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($sessions as $session)
                    <tr>
                        <td> {{ $session->id }}</td>
                        <td> <img src="{{ asset('img/Course app-pana.svg') }}" alt=""></td>
                        <td> {{ $session->title }} </td>
                        <td>{{ $session->description }}</td>
                        <td>{{ $session->Specialty_name }}</td>
                        <td>{{ $session->trainer }}</td>
                        <td> <video width="50" height="50" controls>
                            <source src="{{ $session->video_url }}" type="video/mp4">
                            
                        </video></td>
                        <td> <strong> {{ $session->date }} </strong></td>
                       <td> <a href="{{ route('training-sessions.edit', $session->id) }}"  class="status delete">تعديل</a></td>
                       <td>  <form action="{{ route('training-sessions.destroy', $session->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="status more">حذف</button>
                    </form></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </section>
  
    </main>
</section>
@endsection