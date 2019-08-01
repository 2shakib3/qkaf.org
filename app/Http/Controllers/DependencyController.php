<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Project;
use App\Category;
use App\Product;
use App\Country;
use App\State;
use App\City;
use Cart;



class DependencyController extends Controller
{

    public function dependencyIndex(){
        $cart = Cart::content();
        $countryname = Country::all();
        $projects = Project::all();
        $products = Product::all();
        return view('Frontend.homeContent',compact('projects','products','countryname','cart'));
    }

    public function getcategory(Request $request){
        $data = Category::select('categoryName','id')->where('project_id',$request->project_id)->get();
        return response()->json($data);
    }
    public function getproduct(Request $request){
        $products = Product::select('productName','price','qty','qtyneed','qtyreceived','images','id')->where('catagoryId',$request->catagoryId)->get();
        return view('Frontend.test',compact('products'));
    }

    public function getstate(Request $request){
        $data = State::select('name','id')->where('country_id',$request->country_id)->get();
        return response()->json($data);
    }

    public function getcity(Request $request){
        $data = City::select('name','id')->where('state_id',$request->state_id)->get();
        return response()->json($data);
    }

}
