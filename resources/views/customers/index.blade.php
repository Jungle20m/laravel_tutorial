@extends('layout')

@section('title', 'Customer list')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customer</h1>
            <a href="customers/create">Add new customer</a>
        </div>
    </div>

    <hr>

    @foreach ($customers as $customer)
        <div class="row">
            <div class="col-2">
                {{ $customer->id }}
            </div>
            <div class="col-4">
                {{ $customer->name }}
            </div>
            <div class="col-4">
                {{ $customer->company->name }}
            </div>
            <div class="col-2">
                {{ $customer->active }}
            </div>
        </div>
    @endforeach
    
    

    
@endsection



