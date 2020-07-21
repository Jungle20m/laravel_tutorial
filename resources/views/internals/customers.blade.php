@extends('layout')

@section('content')
    <h1>Customer</h1>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection



