@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('site.admin.store')}}" method="post">
            @csrf


        </form>
    </div>
@endsection
