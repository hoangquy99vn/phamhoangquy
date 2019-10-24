<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $product = Product::all();
        return view('page.home', ['product'=>$product]);
    }

    public function getShop(){
        return view('page.shop');
    }

    public function getProduct_single(){
        return view('page.product_single');
    }

    public function getCart(){
        return view('page.cart');
    }

    public function getCheckout(){
        return view('page.checkout');
    }

    public function getAbout(){
        return view('page.about');
    }

    public function getBlog(){
        return view('page.blog');
    }

    public function getContact(){
        return view('page.contact');
    }
}