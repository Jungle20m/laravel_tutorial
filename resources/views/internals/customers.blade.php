@extends('layout')

@section('content')
    <h1>Customer</h1>

    <form action="customers" method="post">
        <label for="name">User Name</label></br>
        <input type="text" id="name" name="name">
        <p>{{ $errors->first('name') }}</p>

        <input type="submit" value="Add customer">

        @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection



