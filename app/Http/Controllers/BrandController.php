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
        $brands = Brand::all();
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

         //Validation
        $request->validate([
            
            'name'=>'required',
            'photo'=>'required',
        ]);

        //File Uplaod
        $imageName =time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/brandimg'),$imageName);
        $myfile = 'backend/brandimg/'.$imageName;

        //Data insert
        $brand = new Brand;
        
        $brand->name = $request->name;
        $brand->photo = $myfile;
        $brand->save();
        //Redirect
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
        return view('backend.brands.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $brand = Brand::find($id);
        return view('backend.brands.edit',compact('brand'));
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
        //dd($request);

         //Validation
        $request->validate([
            
            'name'=>'required',
            'photo'=>'required',
        ]);

        //if include file, upload
        if($request->hasFile('photo')){

            $imageName =time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/brandimg'),$imageName);
            $myfile = 'backend/brandimg/'.$imageName;
            //delete old photo(unlink)
            //$myfile = $request->oldphoto;
            //Storage::delete($oldphoto);


        }else{
            $myfile = $request->oldphoto;


        }
        $brand = Brand::find($id);;
        
        $brand->name = $request->name;
        $brand->photo = $myfile;
        $brand->save();
        //Redirect
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
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('brands.index');
    }
}
