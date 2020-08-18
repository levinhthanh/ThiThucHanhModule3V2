<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('home_page', compact('products'));
    }

    public function calculationProduct(){
        $categories = Category::select('title','id')->get();
        foreach( $categories  as $key => $value){
            $count = Product::where('category_id','=',$value->id)->get();
            $count = $count->count();
            $value->count = $count;
        }
        return view('calculate', compact('categories'));
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view('create_product', compact('categories'));
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('edit_product', compact('product', 'categories'));
    }

    public function validateProduct(ProductRequest $request)
    {

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();

        $success = "Thêm mới thành công";
        return view('create_product', compact('success'));
    }

    public function updateProduct(ProductRequest $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->active = $request->active;
        $product->save();

        $success = "Chỉnh sửa thành công";
        return view('edit_product', compact('success'));
    }

    public function activeProduct()
    {
        $products = Product::where('active', '=', 'Hoạt động')->with('category')->get();
        return view('active_product', compact('products'));
    }

    public function inActiveProduct()
    {
        $products = Product::where('active', '=', 'Đã xóa')->with('category')->get();
        return view('inactive_product', compact('products'));
    }
}
