@extends('layouts.app')

@section('content')
   <!-- نموذج إضافة فرصة العمل -->
 
<form action="{{ route('jobs.store', ['company' => $company->id]) }}" method="post">
    @csrf
    <label for="title">عنوان الفرصة:</label>
    <input type="text" id="title" name="title">
    <label for="description">وصف الفرصة:</label>
    <textarea id="description" name="description"></textarea>
    <button type="submit">إضافة فرصة العمل</button>
</form>

<!-- نموذج إضافة فرصة التدريب -->
<form action="{{ route('trainings.store', ['company' => $company->id]) }}" method="post">
    @csrf
    <label for="title">عنوان التدريب:</label>
    <input type="text" id="title" name="title">
    <label for="description">وصف التدريب:</label>
    <textarea id="description" name="description"></textarea>
    <button type="submit">إضافة فرصة التدريب</button>
</form>

@endsection