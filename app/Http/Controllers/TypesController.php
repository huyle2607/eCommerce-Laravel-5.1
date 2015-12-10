<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Type;
use App\Brand;
use App\Http\Requests;
use App\Http\Requests\TypeFormRequest;
use App\Http\Controllers\Controller;

class TypesController extends Controller
{
    public function add()
    {
    	$page = 'partials.admin-addType';
        $users = User::all();

        return view('quantri/admin', compact('page', 'users'));
    }

    public function store(TypeFormRequest $request)
    {
    	$type_name = $request->input('type_name');
    	Type::create([
    		'type_name' => $type_name
    		]);

    	return redirect()->route('admin.typeManagement');
    }

    public function edit($id)
    {
    	$page = 'partials.admin-editType';
        $users = User::all();
        $type = Type::find($id);

        return view('quantri/admin', compact('page', 'users', 'type'));
    }

    public function update($id, TypeFormRequest $request)
    {
    	$type = Type::find($id);
    	$type->update([
    		'type_name' => $request->input('type_name')
    		]);

    	return redirect()->route('admin.typeManagement');
    }
}
