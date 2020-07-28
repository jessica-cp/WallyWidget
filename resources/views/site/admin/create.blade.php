@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('site.admin.store')}}" method="post">
            @csrf
            <h2>No. of widgets in one packet:</h2>
            {!! Form::input('number', 'no_of_widgets', null, ['min' => '0', 'class' => 'form-control', 'required', 'placeholder' => '0']) !!}
            <h2>Price:</h2>
            <div class="row">
                <div class="float-left col-2">
                    <h2>£</h2>
                </div>
                <div class="float-right col-10">
                    {!! Form::input('number', 'price', null, ['min' => '0', 'class' => 'form-control', 'required', 'placeholder' => '0']) !!}
                </div>
            </div>
            <div class="mt-5">
                <a href="{{route('site.admin.index')}}" class="btn btn-md btn-success">Back</a>
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
