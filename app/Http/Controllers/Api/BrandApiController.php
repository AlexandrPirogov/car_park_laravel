<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BrandResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;

class BrandApiController extends Controller
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

        return new BrandResource(Brand::all());
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
        $params = $request->query();

        $path = public_path('storage/images/brands');
        if ( ! file_exists($path) ) mkdir($path, 0777, true);
        

        $file = $request->file('iamge');
        if(!is_null($file))
        {
            $fileName = trim($file->getClientOriginalName());
            $file->move('storage/images/brands', $fileName);   
        }
        else
            $fileName = "none";

        $params['logo'] = $fileName;
       
        $brand = Brand::create($params);
        $brands = Brand::all()->each(function ($brand) {
            $brand->makeHidden(["image", "id"]);
        });
        return new BrandResource($brand);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return new BrandResource($brand);
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
        $reqBody = $request->query();
        Brand::whereId($brand->id)->update($reqBody);
        return new BrandResource($brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //$brand->delete();
        return new BrandResource($brand);
    }

}
