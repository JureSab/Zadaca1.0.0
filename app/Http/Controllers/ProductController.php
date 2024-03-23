<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function showAll(){
        $products = Product::all();
        return view('products/index',['products' => $products]);
    }

    public function createProduct(){
        return view('products/create');
    }

    public function storeProduct(Request $request){
        $data = $request->all();
        // DB::table('products')->insert([
        //     'naziv' => $data['naziv'],
        //     'proizvodac' => $data['proizvodac'],
        //     'cijena' => $data['cijena'],
        //     'kolicina' => $data['kolicina']
        // ]);
        Product::create($data);
        return redirect('products');
    }

    public function editProduct(Product $product){
        return view('products/edit',['product' => $product]);
    }

    public function updateProduct(Product $product,Request $request){
        $data = $request->all();
        $product->update($data);
        return redirect('products');
    }

    public function deleteProduct(Product $product){
        $product->delete();
        return redirect(route('products.all'));
    }
}
