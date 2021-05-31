@extends('layouts.app')

@section('title')
Vie All Category
@endsection
@section('content')

@if (session()->has('success'))
<div class="alert alert-primary" role="alert">
    {{ session()->get('success') }}
</div>
@endif

<div class="d-flex justify-content-between">
    <div>
        <h1>Categoryies</h1>
    </div>
    <div>
        <a class="btn btn-primary btn-lg" href="{{ route('category.create') }}">Create</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=>$item)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('category.edit',$item->id) }}">Edit</a>
                        <form class="d-inline" action="{{ route('category.destroy',$item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-danger d-inline" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
