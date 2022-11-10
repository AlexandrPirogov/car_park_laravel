<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all()->each(function ($brand) {
            $brand->makeHidden(["image", "id"]);
        });;

        return \View::make("brands")->with(["brands" => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->post();

        $path = public_path('storage/images/brands');
        if ( ! file_exists($path) ) mkdir($path, 0777, true);
        
        $file = $request->file('image');
        $fileName = trim($file->getClientOriginalName());
        

        $params['logo'] = $fileName;
        $file->move('storage/images/brands', $fileName);

        
        $brand = Brand::create($params);
        $brands = Brand::all()->each(function ($brand) {
            $brand->makeHidden(["image", "id"]);
        });
        return \View::make("brands")->with(["brands" => $brands]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return \View::make("brand")->with(["brand" => $brand->brand,
                                            "version" => $brand->version,
                                            "type" => $brand->type,
                                            "logo" => $brand->logo,
                                            "engine_power" => $brand->engine_power,
                                            "release_date" => $brand->release_date]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $params = $request->post();
        $vehicle = Brand::update($params);
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $reqBody = $request->post();
        unset($reqBody["_method"]);
        unset($reqBody["_token"]);
        Brand::whereId($brand->id)->update($reqBody);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('/brands')->with('success', 'deleted');
    }

    public function createBrand()
    {
        return \View::make('createbrand');
    }

    public function storeMedia($request)
    {
        
        
    }

}
