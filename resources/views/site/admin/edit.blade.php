@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('site.admin.update', $widgetLists->id)}}">
            @csrf
            @method('PUT')
                <h2>No of widgets in one packet:</h2>
                    <input type="number" name="no_of_widgets" min="0" class="form-control" value="{{$widgetLists->no_of_widgets}}">
                    <a href="{{route('site.admin.index')}}" class="btn btn-sm btn-danger">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection
