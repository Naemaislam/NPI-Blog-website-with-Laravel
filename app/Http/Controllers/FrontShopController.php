<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class FrontShopController extends Controller
{
    public function index(){
        $shops = Shop::all();
        return view('frontend.shop.index',compact('shops'));
    }
    public function single_product(){
        // $shops = Shop::all();
        return view('frontend.shop.singleProduct');
    }
}
