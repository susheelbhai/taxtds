<?php
namespace App\Repositories;

use App\Models\Business;
use App\Models\BusinessBannerImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

class BusinessRepository{

    public function store($request)
    {
        $business = new Business();
        if (Route::is('partner.business.store')) {
            $business->partner_id = Auth::guard('partner')->user()->partner_id;
        }
        if (Route::is('admin.business.store')) {
            $business->is_approved = 1;
        }
        $img_path = public_path('/storage/business/images/');
        $business->logo = 'dummy_square.png';
        $business->display_img = 'dummy_4_3.png';
        if($request->hasFile('logo')) {
            $logo_name = uniqid() . '.' . $request->file('logo')->getClientOriginalExtension();
            $logo = Image::make($request->file('logo'));
            $logo->resize(100,100);
            $logo->save($img_path.$logo_name);
            $business->logo = $logo_name;
        }
        if($request->hasFile('display_img')) {
            $display_img_name = uniqid() . '.' . $request->file('display_img')->getClientOriginalExtension();
            $display_img = Image::make($request->file('display_img'));
            $display_img->resize(400,300);
            $display_img->save($img_path.$display_img_name);
            $business->display_img = $display_img_name;
        }
        // $business->admin_id = Auth::guard('admin')->user()->admin_id;
        $business->business_name = $request->business_name;
        $business->category_id = $request->category;
        $business->sub_category_id = $request->sub_category;
        $business->registration_number = $request->registration_number;
        $business->gst_number = $request->gst_number;
        $business->website = $request->website;
        $business->short_description = $request->short_description;
        $business->long_description = $request->long_description;
        $business->services = $request->services;
        $business->business_address = $request->address;
        $business->business_city = $request->city;
        $business->business_pin = $request->pin;
        $business->business_state = $request->state;
        $business->contact_person_name = $request->contact_person_name;
        $business->contact_person_email = $request->contact_person_email;
        $business->contact_person_phone = $request->contact_person_phone;
        $business->facebook = $request->facebook;
        $business->twitter = $request->twitter;
        $business->linkedin = $request->linkedin;
        $business->youtube = $request->youtube;
        $business->instagram = $request->instagram;
        $business->contact_person_alt_phone = $request->contact_person_alt_phone;
        $business->save();
    }

    public function storeBannerImg($request)
    {
        $img_path = public_path('/storage/business/images/');
        $add_img = new BusinessBannerImage();
        if($request->hasFile('banner_img')) {
            $banner_img_name = uniqid() . '.' . $request->file('banner_img')->getClientOriginalExtension();
            $banner_img = Image::make($request->file('banner_img'));
            $banner_img->resize(500,300);
            $banner_img->save($img_path.$banner_img_name);
        $add_img->business_id = $request->business_id;
        $add_img->name = $banner_img_name;
        }
        $add_img->save();

    }

    public function deleteBannerImg($request)
    {
        $data = BusinessBannerImage::find($request->id);
        if (File::exists(public_path('/storage/business/images/'.$data->name))) {
            File::delete(public_path('/storage/business/images/'.$data->name));
        }
        $data->delete();

    }


    public function update($request, $id)
    {
        $business = Business::find($id);

        $img_path = public_path('/storage/business/images/');
        if($request->hasFile('logo')) {
            $logo_name = uniqid() . '.' . $request->file('logo')->getClientOriginalExtension();
            $logo = Image::make($request->file('logo'));
            $logo->fit(100,100);
            $logo->save($img_path.$logo_name);
            $business->logo = $logo_name;
        }
        if($request->hasFile('display_img')) {
            $display_img_name = uniqid() . '.' . $request->file('display_img')->getClientOriginalExtension();
            $display_img = Image::make($request->file('display_img'));
            $display_img->fit(400,300);
            $display_img->save($img_path.$display_img_name);
            $business->display_img = $display_img_name;
        }
        
        $business->business_name = $request->business_name;
        $business->registration_number = $request->registration_number;
        $business->gst_number = $request->gst_number;
        $business->website = $request->website;
        $business->short_description = $request->short_description;
        $business->long_description = $request->long_description;
        $business->services = $request->services;
        $business->business_address = $request->address;
        $business->business_city = $request->city;
        $business->business_pin = $request->pin;
        $business->business_state = $request->state;
        $business->contact_person_name = $request->contact_person_name;
        $business->contact_person_email = $request->contact_person_email;
        $business->contact_person_phone = $request->contact_person_phone;
        $business->contact_person_alt_phone = $request->contact_person_alt_phone;
        $business->facebook = $request->facebook;
        $business->twitter = $request->twitter;
        $business->linkedin = $request->linkedin;
        $business->youtube = $request->youtube;
        $business->instagram = $request->instagram;
        $business->update();
    }
}