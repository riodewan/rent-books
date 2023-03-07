@extends('layouts.main')

@section('title', 'User Detail')

@section('content')
<h1>User Detail</h1>

<div class="mt-4 d-flex justify-content-end">
    @if($user->status == 'inactive')
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Approve User
        </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ban User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are u sure to approve the user?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/users-approve/{{$user->slug}}" class="btn btn-primary me-3">Approve User</a>
                    </div>
                </div>
             </div>
       </div>   
         
    <a href="/users-registered" class="btn btn-primary">Back</a>
    @else
    <a href="/users" class="btn btn-primary">Back</a>
    @endif
</div>

@if(session('status'))

    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
@endif
<div class="mt-4">
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$user->username}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{$user->phone}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" class="form-control" readonly value="{{$user->address}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{$user->status}}">
    </div>
</div>

@endsection