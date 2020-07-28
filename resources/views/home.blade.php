@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-12">
                        <p>{{ Auth::user()->name }}, you are now logged in</p>
                            <br />
                        {{ __('Please click on the link below to access our widget product page') }}
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary main-button" type="submit"><a href="{{route('site.products.index', ['userId' => Auth::id()])}}">Product</a></button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
