<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items = Item::orderBy('id','desc')->take(6)->get();
    	//dd($items);
    	return view('frontend.home',compact('items'));

    }

     function itemdetail($id) {
     	$items =Item::find($id);
     	return view('frontend.detail', compact('items'));
     }

      public function filter_checkout($value='')
    {
    	return view('frontend.checkout');

    }

      public function filter_detail($value='')
    {
    	return view('frontend.items');

    }

      public function filter_login($value='')
    {

    	return view('frontend.login');

    }

      public function filter_profile($value='')
    {
    	
    	return view('frontend.profile');

    }

      public function filter_register($value='')
    {
    	
    	return view('frontend.register');

    }
}
