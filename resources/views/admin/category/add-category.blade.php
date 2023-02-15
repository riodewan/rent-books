@extends('layouts.main')

@section('title', 'Add Category')

@section('content')
<h1>Add Category</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form action="/category-add" method="post" class="mt-4">
    @csrf
    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name" id="name" class="form-control">
    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>

@endsection