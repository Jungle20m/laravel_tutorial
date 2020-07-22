@extends('layout')

@section('title', 'Customer list')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit customer</h1>
            <form action="/customers/{{ $customer->id }}" method="post" class="pb-5">
                @method('PATCH')
                @include('customers/form')

                <input type="submit" class="btn btn-primary" value="Edit">
                
            </form>
        </div>
    </div>
@endsection



