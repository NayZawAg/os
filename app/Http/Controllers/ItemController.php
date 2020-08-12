<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item; //calling model
use App\Brand; //calling model
use App\Subcategory; //calling model


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('backend.items.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $brands= Brand::all(); //retrieve data from brand by helping of brand model
        $subcategories=Subcategory::all();
        return view ('backend.items.create', compact('brands','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('Store Method');
        // dd($request);
        // Validation which is to check data input
        $request->validate([
            'item_codeno'=>'required|min:4',
            'item_name'=>'required',
            'item_photo'=>'required',
            'unit_price'=>'required',
            'discount_price'=>'required',
            'brand_id'=>'required',
            'subcategory_id'=>'required',
            'item_des'=>'required',
        ]);
        // If include file, upload
        $imageName=time().'.'.$request->item_photo->extension();
            
        $request->item_photo->move(public_path('backend/itemimg'),$imageName);
        $myfile='backend/itemimg/'.$imageName;

        // Data insert
        $item=new Item; //setup class
        $item->codeno=$request->item_codeno;
        $item->name=$request->item_name;
        $item->photo=$myfile;
        $item->price=$request->unit_price;
        $item->discount=$request->discount_price;
        $item->description=$request->item_des;
        $item->brand_id=$request->brand_id;
        $item->subcategory_id=$request->subcategory_id;
        $item->save();

        // Redirect
        return redirect()->route('items.index');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('backend.items.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('backend.items.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
