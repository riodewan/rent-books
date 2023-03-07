@extends('layouts.main')

@section('title', 'Add Rent Logs')

@section('content')
<div class="text-center mb-3">
    <h3>Add Rent Logs</h3>
</div>
<div class="col-12 col-md-8 offset-md-2 col-md-4 offset-md-4">
    <div class="mt-4">
        @if(session('messege'))
            <div class="alert {{session('alert-class')}} w-50">
                {{session('messege')}}
            </div>
        @endif
    </div>
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-control w-50">
                <option value="">Select User</option>
                @foreach($users as $item)
                <option value="{{$item->id}}">{{$item->username}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book" class="form-label">Book</label>
            <select name="book_id" id="book" class="form-control w-50">
                <option value="">Select Book</option>
                @foreach($books as $item)
                <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-50">Submit</button>
    </form>
</div>

@endsection