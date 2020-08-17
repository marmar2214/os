<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items = Item::orderBy('id','desc')->take(6)->get();
    	//dd($items);
    	return view('frontend.home',compact('items'));

    }

    public function itemdetail($id) {
     	$items =Item::find($id);
     	return view('frontend.detail', compact('items'));
     }


      public function filter_checkout($value='')
    {
    	return view('frontend.checkout');

    }

      public function filter_detail($value='')
    {
      $subcategories=Subcategory::take(3)->get();
    	return view('frontend.items',compact('subcategories'));

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

    public function getItems(Request $request)
    {
      $sid = $request->sid;

      // dd($sid);
      if ($sid == 0) {
        $items = Item::all();
      }else{
        $subcategory = Subcategory::find($sid);
        $items=$subcategory->items;
      }
      
      return $items;
    }
}
