<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Type;
use App\Brand;
use App\Product;
use App\Http\Requests;
use App\Http\Requests\ProductFormRequest;
use App\Http\Controllers\Controller;
use DB;
use Input;

class ProductsController extends Controller
{
    public function showproducts()
    {
        $brands_mobile = Brand::where('brand_type', 'LIKE', '%phone%')->get();
        $brands_desktop = Brand::where('brand_type', 'LIKE', '%desktop%')->get();
        $brands_laptop = Brand::where('brand_type', 'LIKE', '%laptop%')->get();
        $brands_camera = Brand::where('brand_type', 'LIKE', '%camera%')->get();
        $brands_tv = Brand::where('brand_type', 'LIKE', '%tv%')->get();
 		$products = Product::paginate(12);
 		$products->setPath('products');

 		return view('webcontent/products', compact('products', 'brands_mobile', 'brands_desktop',
         'brands_laptop', 'brands_camera', 'brands_tv'));
    }

    public function showProductsInType($id)
    {
        $brands_mobile = Brand::where('brand_type', 'LIKE', '%phone%')->get();
        $brands_desktop = Brand::where('brand_type', 'LIKE', '%desktop%')->get();
        $brands_laptop = Brand::where('brand_type', 'LIKE', '%laptop%')->get();
        $brands_camera = Brand::where('brand_type', 'LIKE', '%camera%')->get();
        $brands_tv = Brand::where('brand_type', 'LIKE', '%tv%')->get();
    	$products = Product::where('type_id', '=', $id)->paginate(12);
    	$products->setPath('');

    	return view('webcontent/products', compact('products', 'brands_mobile', 'brands_desktop',
         'brands_laptop', 'brands_camera', 'brands_tv'));
    }

    public function showProductsInBrand($type_id, $id)
    {   
        $brands_mobile = Brand::where('brand_type', 'LIKE', '%phone%')->get();
        $brands_desktop = Brand::where('brand_type', 'LIKE', '%desktop%')->get();
        $brands_laptop = Brand::where('brand_type', 'LIKE', '%laptop%')->get();
        $brands_camera = Brand::where('brand_type', 'LIKE', '%camera%')->get();
        $brands_tv = Brand::where('brand_type', 'LIKE', '%tv%')->get();
        //Search all products with the given brand and type
        $products = Product::where('brand_id', '=', $id)
                             ->where('type_id', '=', $type_id)
                             ->paginate(12);
        $products->setPath('');

        return view('webcontent/products', compact('products', 'brands_mobile', 'brands_desktop',
         'brands_laptop', 'brands_camera', 'brands_tv'));
    }

    public function detail($id)
    {
    	$product = Product::find($id);
    	$type = Type::all();	
    	$related_product = Product::where('type_id', '=', $product->type_id)
                                    ->orderByRaw('RAND()')->take(4)->get();

    	return view('webcontent/detail', compact('product', 'type', 'related_product'));
    }

    public function search()
    {
        $brands_mobile = Brand::where('brand_type', 'LIKE', '%phone%')->get();
        $brands_desktop = Brand::where('brand_type', 'LIKE', '%desktop%')->get();
        $brands_laptop = Brand::where('brand_type', 'LIKE', '%laptop%')->get();
        $brands_camera = Brand::where('brand_type', 'LIKE', '%camera%')->get();
        $brands_tv = Brand::where('brand_type', 'LIKE', '%tv%')->get();
        //Search
        $keyword = Input::get('keyword');
        $products = Product::where('product_name', 'LIKE', '%'.$keyword.'%')->paginate();

        return view('webcontent/products', compact('products', 'brands_mobile', 'brands_desktop',
         'brands_laptop', 'brands_camera', 'brands_tv'));

    }

    public function addProduct()
    {
        $page = 'partials.admin-addProduct';
        $users = User::all();
        $types = Type::all();
        $brands = Brand::all();

        return view('quantri/admin', compact('page', 'users', 'brands', 'types'));
    }

    public function storeProduct(ProductFormRequest $request)
    {
        // $product_name = Input::get('product_name'); //Hoặc có thể sử dụng cú pháp này
        $product_name       = $request->input('product_name');
        $type               = $request->input('type');
        $brand              = $request->input('brand');
        $price              = $request->input('price');
        $sale_price         = $request->input('sale_price');
        $quantity           = $request->input('quantity');
        $product_info       = $request->input('product_info');
        $short_description  = $request->input('short_description');
        $description        = $request->input('description');
        $image1             = $request->file('image1');
        $image2             = $request->file('image2');
        $image3             = $request->file('image3');
        $thumbnail1         = $request->file('thumbnail1');
        $thumbnail2         = $request->file('thumbnail2');
        $thumbnail3         = $request->file('thumbnail3');

        Product::create([
            'product_name'      => $product_name,
            'type_id'           => $type,
            'brand_id'          => $brand,
            'price'             => $price,
            'sale_price'        => $sale_price,
            'quantity'          => $quantity,
            'product_info'      => $product_info,
            'short_description' => $short_description,
            'description'       => $description,
            'image1'            => $image1->getClientOriginalName(),
            'image2'            => $image2->getClientOriginalName(),
            'image3'            => $image3->getClientOriginalName(),
            'thumbnail1'        => $thumbnail1->getClientOriginalName(),
            'thumbnail2'        => $thumbnail2->getClientOriginalName(),
            'thumbnail3'        => $thumbnail3->getClientOriginalName(),
            ]);
        $image1->move('public/images/product_images', $image1->getClientOriginalName());
        $image2->move('public/images/product_images', $image2->getClientOriginalName());
        $image3->move('public/images/product_images', $image3->getClientOriginalName());
        $thumbnail1->move('public/images/product_images', $thumbnail1->getClientOriginalName());
        $thumbnail2->move('public/images/product_images', $thumbnail2->getClientOriginalName());
        $thumbnail3->move('public/images/product_images', $thumbnail3->getClientOriginalName());

        return redirect()->route('admin.productManagement');
    }

    public function updateProduct($id, ProductFormRequest $request)
    {
        $product = Product::find($id);
        $product_name       = $request->input('product_name');
        $type               = $request->input('type');
        $brand              = $request->input('brand');
        $price              = $request->input('price');
        $sale_price         = $request->input('sale_price');
        $quantity           = $request->input('quantity');
        $product_info       = $request->input('product_info');
        $short_description  = $request->input('short_description');
        $description        = $request->input('description');
        $image1             = $request->file('image1');
        $image2             = $request->file('image2');
        $image3             = $request->file('image3');
        $thumbnail1         = $request->file('thumbnail1');
        $thumbnail2         = $request->file('thumbnail2');
        $thumbnail3         = $request->file('thumbnail3');
        //Let's update database
        $product->update([
            'product_name'      => $product_name,
            'type_id'           => $type,
            'brand_id'          => $brand,
            'price'             => $price,
            'sale_price'        => $sale_price,
            'quantity'          => $quantity,
            'product_info'      => $product_info,
            'short_description' => $short_description,
            'description'       => $description,
            'image1'            => $image1->getClientOriginalName(),
            'image2'            => $image2->getClientOriginalName(),
            'image3'            => $image3->getClientOriginalName(),
            'thumbnail1'        => $thumbnail1->getClientOriginalName(),
            'thumbnail2'        => $thumbnail2->getClientOriginalName(),
            'thumbnail3'        => $thumbnail3->getClientOriginalName(),
            ]);
        $image1->move('public/images/product_images', $image1->getClientOriginalName());
        $image2->move('public/images/product_images', $image2->getClientOriginalName());
        $image3->move('public/images/product_images', $image3->getClientOriginalName());
        $thumbnail1->move('public/images/product_images', $thumbnail1->getClientOriginalName());
        $thumbnail2->move('public/images/product_images', $thumbnail2->getClientOriginalName());
        $thumbnail3->move('public/images/product_images', $thumbnail3->getClientOriginalName());
        
        return redirect()->route('admin.productManagement');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('admin.productManagement');
    }
}
