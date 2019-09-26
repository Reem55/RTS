<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
class VendorController extends Controller
{
    public function index()
    {
        $vendors = vendor::all();
        return view ('vendors.index', compact ('vendors'));
    }


    public function create()
    {
        $vendors = Vendor::all();
        return view('vendors.create', ('vendors') );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'branch'=>'required',
            'website'=>'required',
            'social'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'type'=>'required',
            'about'=>'required',
            'information' =>'required',
        ]);

        Vendor::create($request->all());
        return redirect()->route('vendors.index')->with('success', 'Vendor has been created successfully');


    }

    public function edit($id)
    {
        $vendor = vendor::find($id);
        return view('vendors.edit', compact('vendor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'branch'=>'required',
            'website'=>'required',
            'social'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'type'=>'required',
            'about'=>'required',
            'information' =>'required',
        ]);

        $vendor = vendor::find($id);
        $vendor->name = $request->get('name');
        $vendor->branch = $request->get('branch');
        $vendor->website = $request->get('website');
        $vendor->social = $request->get('social');
        $vendor->phone = $request->get('phone');
        $vendor->address = $request->get('address');
        $vendor->type = $request->get('type');
        $vendor->about = $request->get('about');
        $vendor->information = $request->get('information');
        $vendor->save();
        return redirect('/vendors')->with('success', 'vendor  has been updated ');
    }


    public function destroy($id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect('/vendors')->with('success', 'vendor has been deleted ');
    }
}
