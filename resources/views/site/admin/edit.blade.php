@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('site.admin.update', $widgetLists->id)}}">
            @csrf
            @method('PUT')
                <h2>No. of widgets in one packet:</h2>
                    <input type="number" name="no_of_widgets" min="0" class="form-control" value="{{$widgetLists->no_of_widgets}}">
                    <br />
            <h2>Price:</h2>
                <div class="row">
                    <div class="float-left col-2">
                        <h2>£</h2>
                    </div>
                    <div class="float-right col-10">
                        <input type="number" name="price" min="0" class="form-control" value="{{$widgetLists->price}}">
                    </div>
                </div>
                <div class="mt-5">
                    <a href="{{route('site.admin.index')}}" class="btn btn-md btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                 </div>
        </form>
    </div>
@endsection
