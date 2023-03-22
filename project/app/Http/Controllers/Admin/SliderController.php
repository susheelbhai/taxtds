<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.resources.slider.index', compact('data'));
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
        $request->validate([
            'banner_img' => 'required',
        ]);
        $img_path = public_path('/storage/common/images/sliders/');
        $data = new Slider();
        if($request->hasFile('banner_img')) {
            $banner_img_name = uniqid() . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $banner_img = Image::make($request->file('banner_img'));
            $banner_img->fit(1442,250);
            $banner_img->save($img_path.$banner_img_name);
            $data->slider_img = $banner_img_name;
        }
        $data->save();
        return back()->with('msg', 'Banner image added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Slider::find($id);
        if (File::exists(public_path('/storage/common/images/sliders/'.$data->slider_img))) {
            File::delete(public_path('/storage/common/images/sliders/'.$data->slider_img));
        }
        $data->delete();
        return back()->with('msg', 'Banner image deleted Successfully');
    }
}
