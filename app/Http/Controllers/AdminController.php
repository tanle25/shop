<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('admin.index');
    }
    public function editbanner()
    {
        # code...
        return view('admin.pages.slidebar');
    }
    public function addproduct()
    {
        # code...
        return view('admin.pages.addproduct');
    }
    public function store(Request $request)
    {
        # code...
        if($request->hasFile('images')){
           // dd($request->images[0]->getClientOriginalName());
           foreach($request->file('images') as $image){
                $item=time().'_'.$image->getClientOriginalName();
                $image->move('image',$item);
                $data[]=$item;
           }
           $product= new ProductModel();
           $product->name = $request->product_name;
           $product->images= json_encode($data);
           $product->price = $request->price;
           $product->promotion_price = $request->promotion;
           $product->color = json_encode($request->color);
           $product->size = json_encode($request->size);
           $product->description = $request->description;
           $product->save();
        }
        return redirect( route('addproduct'));
    }
    public function create()
    {
        # code...
        $data = ProductModel::all();
        return view('admin.pages.productmanager',compact('data'));
    }

    public function edit($id)
    {
        # code...
        $data = ProductModel::find($id);
        return view('admin.pages.updatepdoduct',compact('data'));
    }
    public function update($id, Request $request)
    {
        # code...
        if($request->hasFile('images')){
            // dd($request->images[0]->getClientOriginalName());
            foreach($request->file('images') as $image){
                 $item=time().'_'.$image->getClientOriginalName();
                 $image->move('image',$item);
                 $data[]=$item;
            }
            $product = ProductModel::find($id);
            $product->name = $request->product_name;
           $product->images= json_encode($data);
           $product->price = $request->price;
           $product->promotion_price = $request->promotion;
           $product->color = json_encode($request->color);
           $product->size = json_encode($request->size);
           $product->description = $request->description;
           $product->save();
        }
        return redirect(route('manager'));
    }
    public function delete($id)
    {
        # code...
        $data = ProductModel::find($id)->delete();
        return redirect(route('manager'));
    }
}
