<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        $data = ProductModel::all();
        return view('user.index',compact('data'));
    }
    public function show($id)
    {
        $data = ProductModel::find($id);

        //dd($data);
        # code...
        return view('user.productdetail',compact('data'));
    }
    public function modal()
    {
        # code...
        return view('user.product2');
    }
}
