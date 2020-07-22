@extends('layout')

@section('title', 'Customer list')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>{{ $customer->name }}</h1>
            <p><strong>email: </strong> {{ $customer->email }}</p>
            <p><strong>company: </strong> {{ $customer->company->name }}</p>
        </div>
    </div>

@endsection



