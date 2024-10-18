<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPostRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    public function create(){
        return view('admin.create_product');
    }

    public function index(){
        $products = Product::all();
        return view('admin.product_index',['products'=>$products]);
    }

    public function store(ProductPostRequest $request){
        $validated=$request->validated();
        $image = ($validated['image_path'])->storePublicly('public');
        $validated['image_path'] =$validated['image_path']->hashName();
        $product = Product::create($validated);
    }

    public function edit(Product $id){
        return view('admin.edit_product',['product'=>$id]);
    }

    public function update(ProductUpdateRequest $request,Product $id){
        $validated = $request->validated();
        if(key_exists('image_path',$validated)){
            ($validated['image_path'])->storePublicly('public');
            $validated['image_path'] =$validated['image_path']->hashName();
        }
        $id->update($validated);
        return redirect('/admin/products');
    }

    public function delete(Product $id){
        $id->delete();
        return redirect()->back();
    }
}
