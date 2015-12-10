<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Cart;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{

	public function cart()
    {
    	$items = Cart::content();
    	$total = Cart::total();

    	return view('cart/mycart', compact('items', 'total'));
    }

    public function addToCart($id)
    {
    	$product = Product::find($id);
    	Cart::add([
    		'id' => $id,
    		'name' => $product->product_name,
    		'qty' => 1,
    		'price' => $product->price,
    		'options' => array('image' => $product->image1)
    		]);
    	$items = Cart::content();
    	$total = Cart::total();
    	return view('cart/mycart', compact('items', 'total'));
    }

    public function updateItem()
    {
    	$new_quantity = Input::get('quantity');
    	$rowid = Input::get('rowid');
    	Cart::update($rowid, array(
    		'qty' => $new_quantity
    		));

    	return redirect()->route('mycart');
    }

    public function removeItem($id)
    {
    	Cart::remove($id);

    	return redirect()->route('mycart');
    }
}
