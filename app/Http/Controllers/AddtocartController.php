<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class AddtocartController extends Controller
{
    //
    public function getCart($id)
    {

        # code...
        $product =  ProductModel::find($id);
        Cart::add();
    }
}
