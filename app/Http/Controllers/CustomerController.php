<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function create()
    {
        $url = route('customer.store');
        $title = "Customer Registraton";
        $data = compact('url','title');
        return view('customer')->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required',
                'country'=>'required',
                'state'=>'required',
                'gender'=>'nullable|in:M,F,O', // Add validation for gender
                'address'=>'nullable',
                'dob'=>'nullable|date',
            ]
        );
        echo "<pre>";
        print_r($request->all());

        $customer = new Customers;
        $customer->user_name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer');
    }



    public function view(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            //where
            $customers = Customers::where('user_name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{
            $customers = Customers::paginate(15);
        }

        $data = compact('customers','search');
        return view('customer-view')->with($data);

    }
    public function trash(){
        $customers = Customers::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }
    public function delete($id){
        $customer = Customers::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer');

    }
    public function forceDelete($id){
        $customer = Customers::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->forceDelete();
        }
        return redirect()->back();
    }
    public function restore($id){
        $customer = Customers::withTrashed()->find($id);
        if(!is_null($customer)){
            $customer->restore();
        }
        return redirect('customer');

    }

    public function edit($id){
        $customer = Customers::find($id);
        if(is_null($customer)){
            return redirect('customer');
        }
        else{
            $title = "Update Customer";
            $url = '/customer/update/'.$customer->id;
            $data = compact('customer','url','title');
            return view('customer')->with($data);
        }
    }
    public function update($id, Request $request){
        $customer = Customers::find($id);
        $customer->user_name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer');
    }
}
