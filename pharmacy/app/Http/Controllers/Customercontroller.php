<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class Customercontroller extends Controller
{
 
    public function index()
    {
        $data['customers'] = Customer::orderBy('id','desc')->paginate(3);
        return view('customers.index', $data); 
    }

   
    public function create()
    {
        return view('customers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
            ]);
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->save();
            return redirect()->route('customers.index')
            ->with('success','customer has been created successfully.');
    }

   
    public function show(Customer $customer)
   
    {
        return view('customer.show',compact('customer'));
    }

    
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            ]);
            $customer = Customer::find($id);
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->save();
            return redirect()->route('customers.index')
            ->with('success','customer Has Been updated successfully');
    }

   
    public function destroy(Customer $customer)
    {
    $customer->delete();
    return redirect()->route('customers.index')
   ->with('success','customers has been deleted successfully');
    }
}
