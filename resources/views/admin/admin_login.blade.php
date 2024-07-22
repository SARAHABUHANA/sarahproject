<form method="POST" action="{{ route('adminLoginPost') }}">
    @csrf

    <input type="text" name="name" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>