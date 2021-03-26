<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\Product  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->paginate(15);
        return view('products.index', compact('products'));
    }

    public function search(Request $request)
    {
        $products = Product::where('user_id', Auth::user()->id)->where('name', 'like', '%'.$request->search.'%')->paginate(15);
        return view('products.index', compact('products'));
    }
    public function create(Request $request)
    {
        $dataForm = $request->all();
        $dataForm['user_id']=Auth::user()->id;
        $dataForm['note']=0;
        $product = new Product();
        $product->create($dataForm);
        return $request;
        $products = Product::where('user_id', Auth::user()->id)->where('name', 'like', '%'.$request->search.'%')->paginate(15);
        return view('products.index', compact('products'));
    }
    public function cadastro()
    {
        
        
        return view('products.create');
    }

}
