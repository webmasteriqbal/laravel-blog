@extends('layouts.app')

@section('title')
Update Category
@endsection
@section('content')
<div class="d-flex justify-content-between">
    <div>
        <h1>Update Category</h1>
    </div>
    <div>
        <a class="btn btn-primary btn-lg" href="{{ route('category.index') }}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name"
                    value="{{ $category->name }}">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
