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
        $data = $this->requestValidate();
        Customer::create($data);
        return redirect('customers');
    }

    public function create(){
        $companies = Company::all();
        $customer = new Customer();
        return view('customers/create', compact('companies', 'customer'));
    }

    public function show(Customer $customer){
        return view('customers/show', compact('customer'));
    }

    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers/edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer){
        $data = $this->requestValidate();
        $customer->update($data);
        return redirect('customers/'. $customer->id);
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('/customers');
    }

    private function requestValidate(){
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }
}
