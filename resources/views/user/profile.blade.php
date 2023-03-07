@extends('layouts.main')

@section('title', 'profile')

@section('content')
<h3>Halo, {{Auth::user()->username}}</h3>
<!-- Table Rent Logs -->
<div class="mt-5" style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Book Code</th>
                    <th>Book Title</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentlogs as $value)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->book->book_code}}</td>
                    <td>{{$value->book->title}}</td>
                    <td>{{$value->rent_date}}</td>
                    <td>{{$value->return_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!-- End Table -->

@endsection