<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\MyCart;

class CartController extends Controller
{
    public function index(){
      $cart = Cart::content();
      return view('Frontend.showCart',compact('cart'));
    }

    public function additem(Request $request ,$id ){
      $pro =  Product::find($id);
      // dd($request->all());
      Cart::add([
        'id' => $pro->id,
        'name' => $pro->productName,
        'qty' =>$request->quantity ,
        'price' => $pro->price,
        'weight' => 550,
        'options' =>[
            'images' => $pro->images
          ]]);


          $carts = new MyCart;

          $carts->name=$pro->productName;
          $carts->qty=$request->quantity;
          $carts->price=$pro->price;
          $carts->image=$pro->images;
          $carts->cart_id=$pro->id;
          $carts->save();

          return redirect('/')->with('success', 'Cart Item Added');

    }

    // public function additem(Request $request){
    //   $pro = $request->id;
    //   $product = Product::where('id',$pro)->get();
    //   dd($product);
    //   // Cart::add([
    //   //   'id' => '$pro->id',
    //   //   'name' => '$pro->productName',
    //   //   'qty' => $request->quantity,
    //   //   'price' => '$pro->price',
    //   //   'weight' => 550
    //   // ]);
    // }


    public function removeitem($id){
      Cart::remove($id);
      return back();
    }

}
