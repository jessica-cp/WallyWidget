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
                    </tr>
                </thead>
                <tbody class="text-body">
                @foreach ($widgetLists as $widgetList)
                    <tr>
                        <td>{{$widgetList->id}}</td>
                        <td>{{$widgetList->no_of_widgets}}</td>
                        <td>£{{$widgetList->price}}</td>
                        <td>1</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <h2>Please complete the form below:</h2>
            <p>Please type in how many widgets you would like to buy</p>
            {!! Form::input('number', '', null, ['min' => '0', 'class' => 'form-control', 'required', 'placeholder' => '0']) !!}
            <div class="mt-5">
                <a href="{{route('site.products.index')}}" class="btn btn-md btn-danger delete-action">Cancel</a>
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </div>
        </div>
    </div>
@endsection
