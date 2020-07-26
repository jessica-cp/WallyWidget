@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Page</h2>
        <div class="col-12 pb-5">
            <button class="btn btn-primary main-button"><a href="{{route('site.admin.create')}}">Add a new pack size</a></button>
        </div>
        <div class="col-12">
            <table class="table table-striped table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Widget Pack Sizes</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody class="text-body">
                    @foreach ($widgetLists as $widgetList)
                        <tr>
                            <td>{{$widgetList->id}}</td>
                            <td>{{$widgetList->no_of_widgets}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
