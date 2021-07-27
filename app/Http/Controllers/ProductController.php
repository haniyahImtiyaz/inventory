<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function connect(Request $request){

    }

    Public function list(Request $request){
        $search = '';
        $post = $request->except('_token');
        if (isset($post['search'])) {
            $products = Product::where('product_name', 'like', '%'.$post['search'].'%')->paginate(10);
            $search = $post['search'];
        }
        else {
            $products = Product::paginate(10);
        }
        return view('product.index', ['products'=> $products, 'search' => $search]);
    }

	Public function add(Request $request){
        $post = $request->except('_token');

        if (empty($post)) {
            return view('product.form');
        }
        else {
            $this->validate($request, [
                'product_code'     => 'required|min:2|unique:products,product_code',
                'product_name'     => 'required|min:3',
                'product_stock'     => 'required|integer',
            ]);
            $product = Product::create($post);

            if($product){
                //redirect successs
                return redirect()->route('product.list')->with(['success' => 'Product Saved Successfully!']);
            }else{
                //redirect error
                return redirect()->route('product.list')->with(['error' => 'Product Failed to Save!']);
            }
        }
    }

	Public function update(Request $request, $id){
        $post = $request->except('_token');

        $product = Product::find($id);
        if (empty($post)) {
            return view('product.form', ['product'=>$product]);
        }
        else {
            $this->validate($request, [
                'product_code'     => 'required|min:2|unique:products,product_code,'.$id,
                'product_name'     => 'required|min:3',
                'product_stock'     => 'required|integer',
            ]);
            $product->update($post);

            if($product){
                //redirect successs
                return redirect()->route('product.list')->with(['success' => 'Product Saved Successfully!']);
            }else{
                //redirect error
                return redirect()->route('product.list')->with(['error' => 'Product Failed to Save!']);
            }
        }
    }

	Public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        if($product){
            //redirect successs
            return redirect()->route('product.list')->with(['success' => 'Product Has Been Deleted Successfully!']);
        }else{
            //redirect error
            return redirect()->route('product.list')->with(['error' => 'Product Failed to Delete!']);
        }
    }

}
