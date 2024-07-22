<!-- resources/views/questions/create.blade.php -->

<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <label for="question">إضافة سؤال:</label>
    <textarea id="question" name="question" rows="4" cols="50"></textarea>
    <button type="submit">إضافة</button>
</form>
