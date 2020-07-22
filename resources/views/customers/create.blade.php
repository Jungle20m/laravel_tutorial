@extends('layout')

@section('title', 'Customer list')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add customer</h1>
            <form action="/customers" method="post" class="pb-5">
                @include('form')
                
                <input type="submit" class="btn btn-primary" value="Create">
                
            </form>
        </div>
    </div>
@endsection



