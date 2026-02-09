<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\checkTimeAccess;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Models\Product;

class ProductController extends Controller implements HasMiddleware
{
    public static function middleware(): array{
        return [
            checkTimeAccess::class,
        ];
    }
    public function index(){
        
        $product = Product::all();
        return view('admin.product.index', ['products' => $product, 'title'=> 'Product List']);
    }

    public function getDetail(string $id = '123'){
        return view('admin.product.detail', ['id' => $id]);
    }

    public function create(){
        return view('admin.product.add');
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        return redirect()->route('product.index');

    }

    public function edit(string $id){
        $product = Product::find($id);
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('product.index');
    }

}
