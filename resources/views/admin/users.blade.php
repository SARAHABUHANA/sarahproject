@extends('Admin.dashboard')

@section('content')


<section>

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1> قائمة المبدعين </h1>
            
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id</th>
                        <th>  صورة </th>
                        <th> اسم المستخدم </th>
                        <th> السيرة الذاتية</th>
                        <th> المجال </th>
                        <th> المهارات </th>
                        <th> البريد الإالكتروني </th>
                        <th>  عدد المشاريع </th>
                        <th> تفاصيل </th>
                        <th> حذف </th>
                    </tr>
                </thead>
                <tbody>
                
                 @foreach($users as $user)
                    <tr>
                        <td> {{ $user->id }}</td>
                        <td> <img src="{{ asset('images/'.$user->profile_picture) }}" alt=""></td>
                        <td> {{ $user->name }} </td>
                        <td>{{ $user->about }}</td>
                        <td>{{ $user->Specialty_name }}</td>
                        <td>{{ $user->skill }}</td>
                        <td>{{ $user->email }}</td>
                        <td> <strong> {{ $user->numproject }} </strong></td>
                       <td>  <a class="status more" href="{{ route('user.details', $user->id) }}">تفاصيل </a></td>
                       <td> <form action="{{ route('admin.user_details', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  class="status delete" type="submit">حذف  </button>
                    </form>
                    </td>
                       
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </section>
    </main>

@endsection