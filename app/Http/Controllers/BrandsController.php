<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Type;
use App\Brand;
use App\Http\Requests;
use App\Http\Requests\BrandFormRequest;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    public function add() 
    {
    	$page = 'partials.admin-addBrand';
        $users = User::all();

        return view('quantri/admin', compact('page', 'users', 'brands', 'types'));
    }

    public function store(BrandFormRequest $request)
    {
    	$page = 'partials.admin-addBrand';
        $users = User::all();
        $brand_name = $request->input('brand_name');
        $brand_type = $request->input('brand_type');

        Brand::create([
        	'brand_name' => $brand_name,
        	'brand_type' => $brand_type
        ]);

        return redirect()->route('admin.brandManagement'); 
    }

    public function edit($id)
    {
    	$page = 'partials.admin-editBrand';
        $users = User::all();
        $brand = Brand::find($id);

        return view('quantri/admin', compact('page', 'users', 'brand'));
    }

    public function update($id, BrandFormRequest $request)
    {
        $brand = Brand::find($id);
        $brand_name = $request->input('brand_name');
        $brand_type = $request->input('brand_type');
        
        $brand->update([
            'brand_name' => $brand_name,
            'brand_type' => $brand_type
        ]);

        return redirect()->route('admin.brandManagement');
    }
}
