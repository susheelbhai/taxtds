<?php

namespace App\Http\Controllers\Partner;

use App\Models\Business;
use App\Models\Category;
use App\Models\Salutation;
use Illuminate\Http\Request;
use App\Models\BusinessBannerImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BusinessRepository;

class BusinessController extends Controller
{
    public $repository;
    public function __construct(BusinessRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Business::wherePartnerId(Auth::guard('partner')->user()->partner_id)->get();
        return view('partner.resources.business.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id as value', 'name as lbl' )->get();
        $salutations = Salutation::select('id as value', 'name as lbl' )->get();
        return view('partner.resources.business.create', compact('categories', 'salutations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->store($request);        
        return redirect()->route('partner.business.index');
    }
    public function add_banner_img(Request $request)
    {
        $request->validate([
            'banner_img'=>'required',
        ]);
        // return $request;
        $this->repository->storeBannerImg($request);        
        return back()->with('msg', 'Banner image added Successfully');
    }
    public function delete_banner_img(Request $request)
    {
        // return $data = BusinessBannerImage::find($request->id);
         
        $this->repository->deleteBannerImg($request);        
        return back()->with('msg', 'Banner image deleted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Business::whereId($id)->with('category', 'subCategory')->first();
        $banner_img = BusinessBannerImage::where('business_id', $id)->get();
        return view('partner.resources.business.view', compact('data', 'banner_img'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Business::findOrFail($id);
        $categories = Category::select('id as value', 'name as lbl' )->get();
        $salutations = Salutation::select('id as value', 'name as lbl' )->get();

        return view('partner.resources.business.edit', compact('data', 'categories', 'salutations'));
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
        $this->repository->update($request, $id);        
        return redirect()->route('partner.business.index');
    }

    public function activate(Request $req)
    {
        Business::findOrFail($req->id)->update(['is_active' => 1]);
        return back()->with('msg', 'Bussiness Approved Successfully');
    }

    public function deactivate(Request $req)
    {
        Business::findOrFail($req->id)->update(['is_active' => 0]);
        return back()->with('msg', 'Bussiness Approved Successfully');
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
