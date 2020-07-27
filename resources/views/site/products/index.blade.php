@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
    </div>
    <div class="container">
        <div class="col-12">
            <h2>Product Page</h2>
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
            <h2>Please complete the form below:</h2>
            <p>Please type in how many widgets you would like to buy</p>
            <form action="{{route('site.products.store')}}" method="post">
                @csrf
                {!! Form::input('number', 'total', null, ['min' => '0', 'class' => 'form-control', 'required', 'placeholder' => '0']) !!}
                <div class="mt-5">
                    <a href="{{route('site.products.index')}}" class="btn btn-md btn-danger delete-action">Cancel</a>
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </div>
            </form>
            <br />
            <h2>Products Bought</h2>
                <table class="table table-striped table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No. of Widgets Bought</th>
                            <th scope="col">Widget pack size to send</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-body">
                    @foreach($widgetOrders as $widgetOrder)
                        <tr>
                            <td>{{$widgetOrder->id}}</td>
                            <td>{{$widgetOrder->total}}</td>
                            <td></td>
                            <td>{{$widgetOrder->created_at}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
        </div>
    </div>
@endsection
