@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Page</h2>

        <button class="btn btn-primary main-button"><a href="{{route('site.admin.create')}}">Add a new pack size</a></button>
    </div>
@endsection
