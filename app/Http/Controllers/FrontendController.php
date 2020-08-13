<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	$items=Item::orderBy('id','desc')->take(6)->get();
    	// dd($items);
    	return view('frontend.home', compact('items'));
    }

    public function itemfilter($value='')
    {
    	
        return view('frontend.itemfilter');
    }

    public function detail($id)
    {
     	return view('frontend.detail');
    }

    public function register($value='')
    {
    	return view('frontend.register');
    }

    public function login($value='')
    {
    	return view('frontend.login');
    }

    public function checkout($value='')
    {
    	return view('frontend.checkout');
    }

    public function profile($value='')
    {
    	return view('frontend.profile');
    }
}
