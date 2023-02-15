@extends('layouts.main')

@section('title', 'Update Category')

@section('content')
<h1>Update Category</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form action="/category-edit/{{$category->slug}}" method="post" class="mt-4">
    @csrf
    @method('put')
    <label for="name" class="form-label">Category Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>

@endsection