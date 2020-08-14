<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('backend.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'brand_name'=>'required',
            'brand_photo'=>'required',
        ]);

        $imageName=time().'.'.$request->brand_photo->extension();
            
        $request->brand_photo->move(public_path('backend/brandimg'),$imageName);
        $myfile='backend/brandimg/'.$imageName;

        // Data insert
        $brand=new Brand; //setup class
        
        $brand->name=$request->brand_name;
        $brand->photo=$myfile;
        
        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('backend.brands.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::find($id); 
       
        return view ('backend.brands.edit',compact('brand'));
       
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
        $request->validate([
            'item_name'=>'required',
            'item_photo'=>'sometimes',
            
        ]);
        //if include file, upload
        if ($request->hasFile('brand_photo')) {
          
         $imageName=time().'.'.$request->brand_photo->extension();
            
        $request->brand_photo->move(public_path('backend/brandimg'),$imageName);
        $myfile='backend/brandimg/'.$imageName;
        }

        //delete old photo (unlink)
        else{
            $myfile=$request->oldphoto;
        }
        //data update
        $brand= Brand::find($id); //setup class
       
        $brand->name=$request->brand_name;
        $brand->photo=$myfile;
        
        $brand->save();

        // Redirect
        return redirect()->route('brands.index');
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
