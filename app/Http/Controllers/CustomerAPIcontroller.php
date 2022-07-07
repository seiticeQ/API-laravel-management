<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerAPIcontroller extends Controller
{
    public function index(){
        return Customer::all();
    }

    public function store(){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
    
        ]);
        return Customer::create([
            'name' => request('name'),
            'email' => request('email'),
            'address' => request('address'),
            'group_id' => request('group_id')
        ]);
    }

    public function show(Customer $customer){
        return Customer::find($customer);
    }

    public function update(Customer $customer){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
    
        ]);
        
        $customer->update([
            'name' => request('name'),
            'email' => request('email'),
            'address' => request('address'),
            'group_id' => request('group_id')
        ]);
    }

    public function destroy(Customer $customer){
        $customer->delete();
    }
}
