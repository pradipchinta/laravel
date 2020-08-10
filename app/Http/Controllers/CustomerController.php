<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer= Customer::all();
        return view('customer.index',compact('customer'));
    }



    public function create()
    {
        $customer=new Customer();
        return view('customer.create',compact('customer'));
    }




    public function store()
    {

            Customer::create($this->validateData());

            return redirect('/customers');
    }


    public function show(Customer $customer)
    {
        //  $customer= \App\Customer::findorfail($customerID);
        //  dd($customer);

         return view('customer.show',compact('customer'));
    }



    public function edit(Customer $customer)
    {

        return view('customer.edit',compact('customer'));

    }



    public function update(Customer $customer)
    {

        $customer->update($this->validateData());

            return redirect('/customers');

    }


    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');

    }


    protected function validateData()
    {

      return   $data= request()->validate(
            [
                  'name'=>'required' ,
                  'email'=>'required|email'
            ]
            );
    }

}
