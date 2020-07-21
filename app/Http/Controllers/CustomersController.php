<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();

        return view('internals/customers', [
            'customers'=>$customers,]);
    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
        ]);
            
        $customer = new Customer();
        $customer->name = $data['name'];
        $customer->save();

        return back();
    }
}
