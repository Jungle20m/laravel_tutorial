<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    function index(){
        $customers = [
            'nguyen van a',
            'nguyen van b',
            'nguyen van c',
            'nguyen van d',
        ];
    
        return view('internals/customers', [
            'customers'=>$customers,]);
    }
}
