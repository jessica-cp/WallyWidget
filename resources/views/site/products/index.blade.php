@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Product Page</h2>
        <div class="col-12">
            <table class="table table-striped table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Widget Pack Sizes</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-body">
                @foreach ($widgetLists as $widgetList)
                    <tr>
                        <td>{{$widgetList->id}}</td>
                        <td>{{$widgetList->no_of_widgets}}</td>
                        <td>£{{$widgetList->price}}</td>
                        <td></td>
                        <td>
                            <form action="{{route('site.admin.destroy', $widgetList->id)}}" method="post">
                                <a class="btn btn-sm btn-warning" href="{{route('site.admin.edit', $widgetList->id)}}">Edit</a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" value="delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
