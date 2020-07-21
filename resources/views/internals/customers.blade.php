@extends('layout')

@section('title', 'Customer list')

@section('content')

    <div class="row">
        <div class="col-12">
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
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <span class="error text-danger">{{ $errors->first('active') }}</span>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">

                @csrf
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name }} <span class="text-muted">({{ $activeCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li>{{ $inactiveCustomer->name }} <span class="text-muted">({{ $inactiveCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    

    
@endsection



