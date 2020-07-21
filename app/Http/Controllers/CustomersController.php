<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $inactiveCustomers = Customer::inactive()->get();
        $activeCustomers = Customer::active()->get();

        $companies = Company::all();
        
        $companies = Company::all();

        return view('internals/customers', compact('inactiveCustomers', 'activeCustomers', 'companies'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required', 
        ]);
            
       Customer::create($data);

        return back();
    }
}
