<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresss = Address::all();
        return view('address.index',compact('addresss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request,[
          'address'=>'required',
          'city'=>'required',
          'state'=>'required',
          'zipcode'=>'required|numeric',
          'mobile'=>'required'    
        ]);
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        Address::create($input);
        
        return redirect('address')->with('success','Address Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
       return view('address.show',compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
       return view('address.edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {   
        $this->validate($request,[
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zipcode'=>'required|numeric',
            'mobile'=>'required'    
          ]);
          
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $address->update($input);
        return redirect('address')->with('success','Address Updated !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
       $address->delete();
       return redirect('address')->with('success','Address Deleted !');

    }
}
