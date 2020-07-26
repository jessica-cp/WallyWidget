@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('site.admin.store')}}" method="post">
            @csrf
            <h2>No of widgets in one packet:</h2>
            {!! Form::input('number', 'no_of_widgets', null, ['min' => '0', 'class' => 'form-control', 'required', 'placeholder' => '0']) !!}

            <a href="{{route('site.admin.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection
