<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
 
        return view('customers/index', compact('customers'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required', 
        ]);
            
        Customer::create($data);

        return redirect('customers');
    }

    public function create(){
        $companies = Company::all();

        return view('customers/create', compact('companies'));
    }

    public function show(Customer $customer){
        return view('customers/show', compact('customer'));
    }
}
