<h1>Edit Idea</h1>
<form action="{{ route('admin.ideas.update', $idea->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $idea->title }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $idea->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>