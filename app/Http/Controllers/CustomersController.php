<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $inactiveCustomers = Customer::inactive()->get();
        $activeCustomers = Customer::active()->get();
        
        return view('internals/customers', compact('inactiveCustomers', 'activeCustomers'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
        ]);
            
       Customer::create($data);

        return back();
    }
}
