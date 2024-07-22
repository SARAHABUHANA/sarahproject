@extends('Admin.dashboard')

@section('content')


<section>

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1> قائمة المشاريع الإبداعية  </h1>
            
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> رقم المشروع</th>
                        <th>  صورة </th>
                        <th>  عنوان المشروع </th>
                        <th>   الوصف</th>
                        <th> المجال </th>
                        <th> رقم المستخدم  </th>
                        <th>اسم المستخدم  </th>
                        <th> تاريخ الاضافة  </th>
                        <th> تفاصيل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($projects as $project)
                    <tr>
                        <td> {{ $project->id }}</td>
                        <td> <img src="{{ asset('images/'.$project->image) }}" alt=""></td>
                        <td> {{ $project->title }} </td>
                        <td>{{ $project->content }}</td>
                        <td>{{ $project->Specialty_name }}</td>
                        <td>{{ $project->user_id  }}</td>
                        <td>{{ $project->user->name  }}</td>
                    
                        <td> <strong> {{ $project->created_at }} </strong></td>
                       <td> <a  class="status more" href="{{ route('admin.project_details', $project->id) }}">تفاصيل </a>
                        </td>
                       <td> 
                        <form action="{{ route('admin.project_delete', $project->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="status delete" type="submit">حذف</button>
                        </form>
                    </td>
                       
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </section>
    </main>

@endsection