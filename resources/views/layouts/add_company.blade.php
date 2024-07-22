
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Company</h2>
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control"  type="text"  id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="Specialty_name">Specialty_name</label>
                <textarea class="form-control" type="text" id="Specialty_name" name="Specialty_name" rows="3" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" id="image" name="image" rows="3" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection