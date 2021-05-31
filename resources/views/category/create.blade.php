@extends('layouts.app')

@section('title')
Crete New Category
@endsection
@section('content')
<div class="d-flex justify-content-between">
    <div>
        <h1>Create New Category</h1>
    </div>
    <div>
        <a class="btn btn-primary btn-lg" href="{{ route('category.index') }}">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="test" class="form-label">test</label>
                <input type="text" class="form-control" id="test" name="test" placeholder="Enter Category test">
                @error('test')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
