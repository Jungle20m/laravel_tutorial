@extends('layout')

@section('title', 'Customer list')

@section('content')
    <h1>Customer</h1>

    <form action="customers" method="post" class="pb-5">
        <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            <span class="error text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="form-group">
            <label for="email">Email</label></br>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            <span class="error text-danger">{{ $errors->first('email') }}</span>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">

        @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }} <span class="text-muted">({{ $customer->email }})</span></li>
        @endforeach
    </ul>
@endsection



