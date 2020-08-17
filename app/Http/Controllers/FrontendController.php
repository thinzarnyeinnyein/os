<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;


class FrontendController extends Controller
{
    public function home($value=''){

    	$items = Item::orderBy('id','desc')->take(6)->get();
        
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }

    public function filter_item($value=''){
        $subcategories= Subcategory::take(3)->get();
        $items=Item::all();
    	return view('frontend.items',compact('items','subcategories'));
    }

    
    public function itemdetail($id){

        $items=Item::find($id);
    	return view('frontend.detail',compact('items'));
    }

    public function register($value=''){

    	
    	return view('frontend.register');
    }

    public function login($value=''){

    	
    	return view('frontend.login');
    }

    public function profile($value=''){

    	return view('frontend.profile');
    }
    
    public function checkout($value=''){

    	
    	return view('frontend.checkout');
    }

    public function about($value=''){

        
        return view('frontend.about');
    }
    public function contact($value=''){

        
        return view('frontend.contact');
    }
    
    public function getItem(Request $request)
    {
        $sid = $request->sid;
        if($sid ==0){
            $items = Item::all();

        }else{
            $items = Subcategory::find($sid)->items;
        }
        
        return $items;
    }


}

