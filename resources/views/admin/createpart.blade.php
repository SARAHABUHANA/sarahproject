@extends('admin.dashboard')

@section('content')
    <h1>إضافة جزء للورشة</h1>
    <form action="{{ route('session-parts.store', $session->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">عنوان الجزء</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">شرح الجزء</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="video_url">رابط الفيديو</label>
            <input type="text" class="form-control" id="video_url" name="video_url" required>
        </div>
        <button type="submit" class="btn btn-primary">إضافة الجزء</button>
    </form>
@endsection
