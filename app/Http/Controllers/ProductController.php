<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title = "Product List";
        return view('product.index', ['title'=>$title,
            'products' => [
                ['id'=> 1, 'name'=> 'Product A', 'price'=> 100],
                ['id'=> 2, 'name'=> 'Product B', 'price'=> 200],
                ['id'=> 3, 'name'=> 'Product C', 'price'=> 300],
            ]
        ]);
    }

    public function getDetail(string $id = '123'){
        return view('product.detail', ['id' => $id]);
    }

    public function create(){
        return view('product.add');
    }

    public function store(Request $request)
    {
        $name  = $request->input('name');
        $price = $request->input('price');

        return redirect()->route('product.index');

    }

    public function checkLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if($username === 'nghianq' && $password === '0093667'){
            return 'Đăng nhập thành công';
        } else {
            return 'Đăng nhập thất bại';
        }
    }
}
