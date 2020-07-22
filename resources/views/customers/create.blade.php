@extends('layout')

@section('title', 'Customer list')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add customer</h1>
            <form action="/customers" method="post" class="pb-5">
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
                <div class="form-group">
                    <label for="company">Company</label>
                    <select name="company_id" id="company_id" class="form-control">
                        <option value="" disabled>Select company</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}"> {{ $company->name }}</option>
                        @endforeach
                    </select>
                    <span class="error text-danger">{{ $errors->first('company_id') }}</span>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                @csrf
            </form>
        </div>
    </div>
@endsection



